<?php

/* INPUT PARAMETERS */
$text = $_GET['text'];
$zeroeth = $_GET['from'];
$first= $_GET['a'];
$second = $_GET['b'];
$third = $_GET['c'];
$current = $text;

/* RETRIEVE API KEY */
include("config.php");

/* TRANSLATE */
if (strlen($text) > 100 || strlen($text) < 3) {
    //Invalid input length
	echo '<p>The word or phrase must be 3-100 characters in length</p>';
}
else {
    //We're good to translate
    $url = 'https://api.datamarket.azure.com/Data.ashx/Bing/MicrosoftTranslator/v1/Translate?Text=%27'.urlencode($current).'%27&To=%27' . $first . '%27&From=%27' . $zeroeth. '%27&$top=100&$format=json';
    $handle = curl_init ($url);
    if ($handle) {
        $curlOptArr = array(
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $api_key . ':' . $api_key,
            CURLOPT_RETURNTRANSFER => TRUE

        );
        curl_setopt_array($handle, $curlOptArr);
        $response = curl_exec($handle);
        $data = json_decode($response,true);
        if (is_array($data)) {
            if (isset($data['d']['results'][0]['Text'])) {
                $current = $data['d']['results'][0]['Text'];
                echo '<p class="transition">'.urldecode($current).'</p>';
            } else {
                print false;
            }
        } else {
            print $text;
        }
        $errRet = curl_error($handle);
        curl_close($handle);
    }

    $url = 'https://api.datamarket.azure.com/Data.ashx/Bing/MicrosoftTranslator/v1/Translate?Text=%27'.urlencode($current).'%27&To=%27' . $second . '%27&From=%27' . $first. '%27&$top=100&$format=json';
    $handle = curl_init ($url);
    if ($handle) {
        $curlOptArr = array(
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $api_key . ':' . $api_key,
            CURLOPT_RETURNTRANSFER => TRUE

        );
        curl_setopt_array($handle, $curlOptArr);
        $response = curl_exec($handle);
        $data = json_decode($response,true);
        if (is_array($data)) {
            if (isset($data['d']['results'][0]['Text'])) {
                $current = $data['d']['results'][0]['Text'];
                echo '<p class="transition">'.urldecode($current).'</p>';
            } else {
                print false;
            }
        } else {
            print $text;
        }
        $errRet = curl_error($handle);
        curl_close($handle);
    }

    $url = 'https://api.datamarket.azure.com/Data.ashx/Bing/MicrosoftTranslator/v1/Translate?Text=%27'.urlencode($current).'%27&To=%27' . $third . '%27&From=%27' . $second . '%27&$top=100&$format=json';
    $handle = curl_init ($url);
    if ($handle) {
        $curlOptArr = array(
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $api_key . ':' . $api_key,
            CURLOPT_RETURNTRANSFER => TRUE

        );
        curl_setopt_array($handle, $curlOptArr);
        $response = curl_exec($handle);
        $data = json_decode($response,true);
        if (is_array($data)) {
            if (isset($data['d']['results'][0]['Text'])) {
                $current = $data['d']['results'][0]['Text'];
                echo '<p class="transition">'.urldecode($current).'</p>';
            } else {
                print false;
            }
        } else {
            print $text;
        }
        $errRet = curl_error($handle);
        curl_close($handle);
    }

    $url = 'https://api.datamarket.azure.com/Data.ashx/Bing/MicrosoftTranslator/v1/Translate?Text=%27'.urlencode($current).'%27&To=%27' . $zeroeth . '%27&From=%27' . $third . '%27&$top=100&$format=json';
    $handle = curl_init ($url);
    if ($handle) {
        $curlOptArr = array(
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $api_key . ':' . $api_key,
            CURLOPT_RETURNTRANSFER => TRUE

        );
        curl_setopt_array($handle, $curlOptArr);
        $response = curl_exec($handle);
        $data = json_decode($response,true);
        if (is_array($data)) {
            if (isset($data['d']['results'][0]['Text'])) {
                $current = $data['d']['results'][0]['Text'];
                echo '<p>'.urldecode($current).'</p>';
            } else {
                print false;
            }
        } else {
            print $text;
        }
        $errRet = curl_error($handle);
        curl_close($handle);
    }
    $uni = substr(md5(microtime()),rand(0,26),5);
}
?>
