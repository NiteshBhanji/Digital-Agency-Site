$(document).ready(function () {
    $('.project-wrapper').slick({
        infinite: true,
        slidesToShow: 3,
        arrows: true,
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        draggable: true,
        centerMode: false,
        variableWidth: true
    });

    $('.project-wrapper').on('mousemove', function(e){
        var pWidth = $(this).innerWidth();
        var pOffset = $(this).offset(); 
        var x = e.pageX - pOffset.left;
  
       if(pWidth/2 > x) {
         $('.project-wrappere').css('cursor','url(https://i.ibb.co/qR2mDmM/slider-arrow-left.png), pointer');
       } else if(pWidth/2 < x) {
         $('.project-wrapper').css('cursor','url(http://www.google.com/intl/en_ALL/mapfiles/closedhand.cur), pointer');
       }
   });
});