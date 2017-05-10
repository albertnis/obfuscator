$(function() {
    $("select.lang").droppy();

    $(".do-obfuscate").on("click", function() {
        var langs = [$("#lang-0").val(), $("#lang-1").val(), $("#lang-2").val(), $("#lang-3").val()];
        $(".do-obfuscate").html("Loading");
        $(".do-obfuscate").prop("disabled", true);
        $(".do-obfuscate").addClass("loading");
        $.ajax({
          method: "POST",
          url: "php/translator.php",
          data: { text: $("#obf-str").val(), langs: JSON.stringify(langs) }
        }).done(function( msg ) {
            $(".do-obfuscate").html("Submit");
            $(".do-obfuscate").prop("disabled", false);
            $(".do-obfuscate").removeClass("loading");
            $(".row-output").fadeIn(300);
            $(".row-output").empty();

            var ro = JSON.parse(msg);
            for (var i = 0; i < ro.length; i++) {
                var elem = '<div><div class="langtip">['+ro[i]["lang"]+']</div>'+ro[i]["text"]+'</div>';
                $(".row-output").append(elem);
            }
        });
    });
});
