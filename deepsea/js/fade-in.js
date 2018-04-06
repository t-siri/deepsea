$(document).ready(function() {

	$(window).scroll( function(){
		    
		$('.data').each( function(i, d){
		    var bottom_of_object = $(d).position().top + $(d).outerHeight();
		    var window_scroll = $(window).scrollTop();
		            
		    if( window_scroll > bottom_of_object ){
		                
		        $(d).animate({'opacity':'1'},500);
		                    
		    }
		            
		}); 
	});
});