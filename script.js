jQuery(document).ready(function($) {
    $('.has-submenu').click(function() {
        $(this).find('.submenu').toggle(); // affiche ou cache le sous-menu
    });
});
