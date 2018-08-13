$( document ).ready(function() {

  $(".btn-scrolldown").on( "click", function() {
    $('html, body').animate({
      scrollTop: $("#newsblock").offset().top-70
    }, 400);
  });
  
  var $document = $(document),
    $element = $('.btn-scrolldown'),
    className = 'hasScrolled';

  $document.scroll(function() {
    if ($document.scrollTop() >= 200) {
      // user scrolled 50 pixels or more;
      // do stuff
      $element.addClass(className);
    } else {
      $element.removeClass(className);
    }
  });
  
  $document.scroll(function() {
    if ($document.scrollTop() >= 400) {
      // user scrolled 50 pixels or more;
      // do stuff
      $element.hide();
    } else {
      $element.show();
    }
  });


});