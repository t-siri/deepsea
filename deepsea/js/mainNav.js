$(document).ready(function(){
	document.menuIsOpen = false;

	$('.tabContainer > div').hide();
	$('.tabContainer > div:first-of-type').hide();

	$('.tabButton').click(function(){
		if(document.menuIsOpen == false){
			document.menuIsOpen = true;
			event.preventDefault();

		$('.tabContainer > div').hide();
		$("#"+$(this).attr('data-openTab')).show().css("display", "block");

		} else {
			document.menuIsOpen = false;
			event.preventDefault();

		$('.tabContainer > div').hide();
		$('.tabContainer > div:first-of-type').hide();

		}
	});

	$(".openhover").mouseenter(function () {
			document.menuIsOpen = true;
			event.preventDefault();
		console.log("hello")
		$('.openhover > div').hide();
		$("#"+$(this).attr('data-openTab')).show().css("display", "block");

		})

	$(".tabContainer").mouseleave(function () {
			document.menuIsOpen = false;
			event.preventDefault();
			
	$('.tabContainer > div').hide();
		$('.tabContainer > div:first-of-type').hide();
		$('.openhover > div').hide();
		$('.openhover > div:first-of-type').hide();
	});
	

	
});




