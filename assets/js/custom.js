jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop()){
        jQuery(".header-fixed .header-sticky").addClass("header-fixed-shrink");
    }
    else {
        jQuery(".header-fixed .header-sticky").removeClass("header-fixed-shrink");
    }
});