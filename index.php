<html>
<head>
    <title>Obfuscator</title>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300,400,600" rel="stylesheet">
    <link href="lib/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="lib/droppy/droppy.css" rel="stylesheet">
    <link href="css/obfuscator.css" rel="stylesheet">

</head>
<body>
<div class="section section-header">
    <div class="row row-header">
        <h1 class="header">Obfuscator</h1>
    </div>
    <div class="row row-subheader">
        <div class="container">
            <p class="subheader"><b>No computer translator is perfect.</b> Obfuscator highlights the potentially hilarious flaws of modern computer translators. Simply enter a phrase, and obfuscator will translate it through several selected languages before converting it back to the original. You might be surprised by the results.</p>
        </div>
    </div>
</div>
<div class="section section-content">
    <div class="row row-input">
        <div class="container">
            <div class="step step-one">
                <p><span class="step-hint">1</span>Enter text to obfuscate</p>
                <input id="obf-str" type="text" placeholder="Obfuscate me">
            </div>
            <div class="step step-two">
                <p><span class="step-hint">2</span>Select languages</p>
                <select id="lang-0" class="lang" data-placeholder="Original Language">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="es">Spanish</option>
                    <option value="nl">Dutch</option>
                    <option value="it">Italian</option>
                    <option value="ar">Arabic</option>
                    <option value="bg">Bulgarian</option>
                    <option value="zh-CHS">Chinese</option>
                    <option value="cs">Czech</option>
                    <option value="da">Danish</option>
                    <option value="fi">Finnish</option>
                    <option value="he">Hebrew</option>
                    <option value="hi">Hindi</option>
                    <option value="hu">Hungarian</option>
                    <option value="ja">Japanese</option>
                    <option value="ko">Korean</option>
                    <option value="ru">Russian</option>
                </select><br />
                <select id="lang-1" class="lang" data-placeholder="Language 1">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="es">Spanish</option>
                    <option value="nl">Dutch</option>
                    <option value="it">Italian</option>
                    <option value="ar">Arabic</option>
                    <option value="bg">Bulgarian</option>
                    <option value="zh-CHS">Chinese</option>
                    <option value="cs">Czech</option>
                    <option value="da">Danish</option>
                    <option value="fi">Finnish</option>
                    <option value="he">Hebrew</option>
                    <option value="hi">Hindi</option>
                    <option value="hu">Hungarian</option>
                    <option value="ja">Japanese</option>
                    <option value="ko">Korean</option>
                    <option value="ru">Russian</option>
                </select><br />
                <select id="lang-2" class="lang" data-placeholder="Language 2">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="es">Spanish</option>
                    <option value="nl">Dutch</option>
                    <option value="it">Italian</option>
                    <option value="ar">Arabic</option>
                    <option value="bg">Bulgarian</option>
                    <option value="zh-CHS">Chinese</option>
                    <option value="cs">Czech</option>
                    <option value="da">Danish</option>
                    <option value="fi">Finnish</option>
                    <option value="he">Hebrew</option>
                    <option value="hi">Hindi</option>
                    <option value="hu">Hungarian</option>
                    <option value="ja">Japanese</option>
                    <option value="ko">Korean</option>
                    <option value="ru">Russian</option>
                </select><br />
                <select id="lang-3" class="lang" data-placeholder="Language 3">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="es">Spanish</option>
                    <option value="nl">Dutch</option>
                    <option value="it">Italian</option>
                    <option value="ar">Arabic</option>
                    <option value="bg">Bulgarian</option>
                    <option value="zh-CHS">Chinese</option>
                    <option value="cs">Czech</option>
                    <option value="da">Danish</option>
                    <option value="fi">Finnish</option>
                    <option value="he">Hebrew</option>
                    <option value="hi">Hindi</option>
                    <option value="hu">Hungarian</option>
                    <option value="ja">Japanese</option>
                    <option value="ko">Korean</option>
                    <option value="ru">Russian</option>
                </select>
            </div>
            <div class="step step-three">
                <p><span class="step-hint">3</span>Obfuscate it!</p>
                <button class="do-obfuscate">Submit</button>

            </div>
        </div>
    </div>
    <div class="row row-output">
    </div>
</div>
<div class="section section-footer">

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="lib/droppy/droppy.js"></script>
<script src="js/obfuscator.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45382817-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
