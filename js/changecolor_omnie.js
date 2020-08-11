$(function() {
    var header = $(".nav");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 350) {
            $( "nav" ).removeClass( "navbar-dark bg-jasny" ).addClass( "navbar-light bg-ciemny" );
        } else {
            $( "nav" ).removeClass( "navbar-light bg-ciemny").addClass( "navbar-dark bg-jasny" );
        }
    });
  
});