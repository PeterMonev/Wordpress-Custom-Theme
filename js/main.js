jQuery(document).ready(function($) {
    
       $('a[href*="#"]').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });

    $(document).ready(function() {
        var header = $('header');
        var scrollDistance = 100;
    
        $(window).scroll(function() {
            if ($(window).scrollTop() > scrollDistance) {
                header.addClass('header-scroll');
            } else {
                header.removeClass('header-scroll');
            }
        });
    });
});


