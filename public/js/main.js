(function ($) {
    ("use strict");

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $(".navbar").addClass("sticky-top shadow-sm");
        } else {
            $(".navbar").removeClass("sticky-top shadow-sm");
        }
    });
    $(window).scroll(function () {
        //mostar el menu de iniciar sesion
        const navbar = $(".navbar");
        const loginLink = $(".nav-item.nav-link:contains('Iniciar Sesión')"); // Selecciona el enlace de inicio de sesión

        if ($(this).scrollTop() > 45) {
            navbar.addClass("sticky-top shadow-sm");
            loginLink.removeClass("d-lg-none"); // Muestra el enlace
        } else {
            navbar.removeClass("sticky-top shadow-sm");
            loginLink.addClass("d-lg-none"); // Oculta el enlace
        }
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Experience
    $(".experience").waypoint(
        function () {
            $(".progress .progress-bar").each(function () {
                $(this).css("width", $(this).attr("aria-valuenow") + "%");
            });
        },
        { offset: "80%" }
    );

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Modal Video
    var $videoSrc;
    $(".btn-play").click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $("#videoModal").on("shown.bs.modal", function (e) {
        $("#video").attr(
            "src",
            $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
        );
    });
    $("#videoModal").on("hide.bs.modal", function (e) {
        $("#video").attr("src", $videoSrc);
    });

    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
    });
})(jQuery);
