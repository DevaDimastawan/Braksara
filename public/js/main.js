(function ($) {
    "use strict";

    var fullHeight = function () {
        $(".js-fullheight").css("height", $(window).height());
        $(window).resize(function () {
            $(".js-fullheight").css("height", $(window).height());
        });
    };
    fullHeight();

    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").toggleClass("active");
        $("#tp-bg").toggleClass("tp-bg");
        $("body").toggleClass("body-overflow");
    });
    $("#sidebarCollapse2").on("click", function () {
        $("#sidebar").toggleClass("active");
        $("#tp-bg").toggleClass("tp-bg");
        $("body").toggleClass("body-overflow");
    });
    $("#tp-bg").on("click", function () {
        $("#sidebar").toggleClass("active");
        $("#tp-bg").toggleClass("tp-bg");
        $("body").toggleClass("body-overflow");
    });
})(jQuery);
