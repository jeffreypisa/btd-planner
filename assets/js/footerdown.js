    // Matchheight
    var he = $('header').height();
    var fo = $('footer').height();
    
    var dohi = $(window).height();
    
    var minhe = dohi - fo - 73;
    
    $('#content').css('min-height', minhe);
    
$( window ).resize(function() {
    // Matchheight
    var he = $('header').height();
    var fo = $('footer').height();
    
    var dohi = $(window).height();
    
    var minhe = dohi - fo - 73;
    
    $('#content').css('min-height', minhe);
    
});