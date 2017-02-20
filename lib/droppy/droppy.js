$.fn.droppy = function() {
    for (j=0; j<this.length; j++) {
        var subthis = this[j];
        var subthisId = $(subthis).attr("id");
        $(subthis).hide();
        var $dwip = $('<div class="drpy-select"></div>');
        $dwip.addClass($(subthis).attr("class"));
        $dwip.attr("id", "drpy-"+subthisId);
        $dwip.append('<div class="drpy-selected"></div>');
        $dwip.append('<i class="fa fa-sort-desc drpy-togg" aria-hidden="true"></i>');
        $dwip.append('<ul class="drpy-dropdown"></ul>');

        if ($(subthis).attr("data-placeholder") !== undefined) {
            $dwip.find(".drpy-selected").html($(subthis).attr("data-placeholder"));
            $dwip.find(".drpy-selected").addClass("drpy-placeheld");
        }

        var $subthisOptions = $(subthis).find("option");

        for (i=0; i<$subthisOptions.length; i++) {
            $opt = $($subthisOptions[i]);
            $owip = $('<li class="drpy-option" data-value="'+$opt.attr("value")+'">'+$opt.html()+'</li>');
            $dwip.find(".drpy-dropdown").append($owip);
        }
        $dwip.insertAfter(subthis);
        $("#drpy-"+subthisId).on("click", function() {
            $(this).find(".drpy-dropdown").addClass("isolate");
            $(".drpy-dropdown:not(.isolate)").removeClass("open");
            $(this).find(".drpy-dropdown").toggleClass("open");
            $(this).find(".drpy-dropdown").removeClass("isolate");
        });

        $("#drpy-"+subthisId+" .drpy-option").on("click", function() {
            var selectedValue = $(this).attr("data-value");
            $(this).parents('.drpy-select').prev().val(selectedValue);
            $(this).parents('.drpy-select').find(".drpy-selected").html($(this).html());
            $(this).parents('.drpy-select').find(".drpy-selected").removeClass('drpy-placeheld');
        });



    }
};

$(document).on('click', function(event) {
  if (!$(event.target).closest('.drpy-select').length) {
    $('.drpy-select .drpy-dropdown').removeClass("open");
  }
});
