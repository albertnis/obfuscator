$(function() {
    $("select.lang").droppy();

    $(".do-obfuscate").on("click", function() {
        $.ajax({
          method: "GET",
          url: "php/translator.php",
          data: { text: $("#obf-str").val(), from: $("#lang-0").val(), a: $("#lang-1").val(), b: $("#lang-2").val(), c: $("#lang-3").val()}
        }).done(function( msg ) {
            $(".row-output").html(msg);
            $(".row-output").fadeIn(300);
        });
    });
});
