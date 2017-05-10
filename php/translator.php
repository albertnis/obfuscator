<?php

/* INPUT PARAMETERS */
$text = $_POST['text'];
$langs = json_decode($_POST['langs']);
array_push($langs, $langs[0]);
$outputs = array([
    "lang" => $langs[0],
    "text" => $text
]);

/* RETRIEVE API KEY */
include("config.php");
include("mstapi.php");

/* TRANSLATE */
if (strlen($text) > 100 || strlen($text) < 3) {
    //Invalid input length
	echo '<p>The word or phrase must be 3-100 characters in length</p>';
}
else {
    try {
        // Authentication
        $accessToken = "";
        if (file_exists($accessToken_filename)) {
            // Check for pre-existing key
            $lastGen = filemtime($accessToken_filename);
            if ((time() - $lastGen) < 540) {
                // If key generated in last 7 minutes, re-use it
                $accessToken = file_get_contents($accessToken_filename);
            }
        }
        if ($accessToken === "") {
            // If no valid pre-stored key, ask Microsoft nicely for a new one
            $auther = new AccessTokenAuthentication();
            $accessToken = $auther->getToken($api_key);
            file_put_contents($accessToken_filename, $accessToken);
        }
        $authHeader = "Authorization: Bearer ".$accessToken;

        // Translate iteratively
        $translatorObj = new HTTPTranslator();
        for ($i = 1; $i < sizeof($langs); $i++) {

            // Load next languages
            $from = $langs[$i-1];
            $to = $langs[$i];

            // Prepare request
            $params = "text=".urlencode($outputs[$i-1]["text"])."&to=".$to."&from=".$from;
            $translateUrl = "https://api.microsofttranslator.com/v2/Http.svc/Translate?$params";

            // Process response
            $curlResponse = $translatorObj->curlRequest($translateUrl, $authHeader);
            $xmlObj = simplexml_load_string($curlResponse);
            foreach((array)$xmlObj[0] as $val){
                $translatedStr = $val;
            }
            array_push($outputs, array("lang" => $langs[$i], "text" => $translatedStr));
        }

        echo json_encode($outputs);


    }
    catch (Exception $e) {
        echo "Exception: ".$e->getMessage().PHP_EOL;
    }
}
?>
