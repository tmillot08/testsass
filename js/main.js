


 var items = document.querySelectorAll('.circle a');

 for(var i = 0, l = items.length; i < l; i++) {
   items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";

   items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
 }

 document.querySelector('.menu-button').onclick = function(e) {
    e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
 }
 if (window.matchMedia("(max-width: 980px)").matches && window.matchMedia("(min-width: 594px)").matches ) {

 }else{
   $(document).scroll(function() {
     var y = $(this).scrollTop();
     if (y > 200) {
       $('.circular-menu').fadeIn();
     } else {
       $('.circular-menu').fadeOut();
     }
   });
 }

 $(".burger-menu ").on("click",".bar",function(){

   $(".menu").slideToggle();
   $(".bar").toggleClass('change');
   $(".menu li").slideRight();

  });
