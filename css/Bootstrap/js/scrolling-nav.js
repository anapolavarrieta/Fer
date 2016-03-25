//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    var navHeight = $('#nav').outerHeight(); // adjust this for your nav id
    $(window).bind('resize', function(){
        navHeight = $('#nav').outerHeight(); // adjust this for your nav id
    });
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - navHeight
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
