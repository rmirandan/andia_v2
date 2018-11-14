
//Inicializar el plugin para las animaciones.
  wow = new WOW(
  {
  boxClass:     'wow',      // default
  animateClass: 'animated', // default
  offset:       0,          // default
  mobile:       false,       // default
  live:         true        // default
}
)
wow.init();
jQuery(document).ready(function ($) {

	$(".team", this).hover(function(){
		$("img", this).css("display", "none");
		$(".overlay", this).css("display","block");
		$(".loguito", this).css("display", "block");
		$(".in", this).css("display", "block");
		
	},function(){
		$("img", this).css("display", "block");
		$(".overlay", this).css("display","none");
	});

// 	$(window).scroll(function (event) {
    
//     var scroll = $(window).scrollTop();
    
// 	    if (scroll > 70) {
// 	    	$("nav").css("background" , "linear-gradient(-107.56deg, #4AC2C8 0%, #4AC2C8 26.96%, #352265 98.79%)");
// 	    }
// 	    else {
// 	    	$("nav").css("background" , "transparent");

// 	    }
// });

});