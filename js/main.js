$('document').ready( function () {
	$('.mobile-nav').click(function () {
		if ($('.top-navigation').css('display') == 'none'){
			$('.top-navigation').slideDown(200);
		} else {
			$('.top-navigation').slideUp(200);
		}
	});

});