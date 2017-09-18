/**
* The library
**
* @author    Diego Chi
* @version   v1.0
**/
var o_wow=new WOW({animateClass:"animated",boxClass:"wowload",live:true,mobile:true,offset:0});o_wow.init();
$(".carousel").swipe({allowPageScroll:"vertical",swipeLeft:function(){$(this).carousel("next")},swipeRight:function(){$(this).carousel("prev")}});
$("#mainnavbar .nav-link:not(.external-link),#gototop").on("click",function(e){e.preventDefault();$("html,body").stop().animate({scrollTop:$(this.hash).offset().top-100},500)});