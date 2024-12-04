$(document).ready(function(){ 
    $(window).scroll(function(){
      $('.para-column-one').css('transform', 'translate3d(0,' + $(this).scrollTop()*0.2 + 'px, 0)'); 
      $('.para-column-two').css('transform', 'translate3d(0,' + $(this).scrollTop()*-0.4 + 'px, 0)');
      $('.para-column-three').css('transform', 'translate3d(0,' + $(this).scrollTop()*0.3 + 'px, 0)');
   }).scroll();
});  