jQuery( document ).ready(function() {
  jQuery( "#nav-main .js-opensubmenu" ).on( "click", function(event) {
    event.preventDefault();
    jQuery( "#nav-main li" ).removeClass('active');
    jQuery(this).parent().addClass('active');
    jQuery('.submenu .item').attr("show", "no");
    targetlink = jQuery(this).attr("target");
    jQuery('.submenu').attr("status", "on");
    jQuery(targetlink).attr("show", "yes");
    
    if ($('header nav[status=on]')) {
      setTimeout(function(){ $('header nav').attr("status", "on") }, 150);
    }
    
    jQuery(document).mouseup(function(e) {
      var container = jQuery(".submenu");

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) 
      {
        container.attr("status", "off");
        jQuery('header nav').attr("status", "off");
        jQuery( "#nav-main li" ).removeClass('active');
      }
    });
  });
});