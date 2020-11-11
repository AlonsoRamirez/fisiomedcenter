$(document).ready(function() {
  setTimeout(function() {
    $('.wrapper').addClass('loaded');
    
  }, 5000);
});



jQuery(function(){

  $(window).load(function(){
  
  $('.wrapper').removeClass('preload');
  
  });

});