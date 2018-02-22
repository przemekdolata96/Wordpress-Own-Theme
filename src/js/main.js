let isSlideDown = false;

$(document).ready(function() {
    $('.menu-header-menu-container > ul > li').addClass('hvr-shutter-out-horizontal');
    $('#menu-button').click(function() {
        if (isSlideDown) {
            $('ul').slideUp(400);
            isSlideDown = false;
        } else {
            $('ul').slideDown(400);
            isSlideDown = true;
        }
    });
});