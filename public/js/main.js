
jQuery(function($){

	$(document).ready(function(){
	
	$('body,#content').fadeIn(5000);
  	
  	$('div.load').fadeOut(5000);
  	
  	$('#content p').css({ "color": "red"});
  		
  		$('#content p').click(function(){
  			$('#content p').animate({margin : '10px'});
  		})
	});
	
});

