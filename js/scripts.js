$(document).ready(function () {

	// cache window object
	var $window = $(window);

	// parallax bg

	$('section[data-type="background"]').each(function() {
		var $bgobj = $(this); // assignment of object
		$(window).scroll(function () {

			// scroll background at var speed
			// y position is negative value due to scroll up

			var yPos = -(($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('speed'));

			// final background position
			var coords = '50%'+ yPos + 'px';

			// move background

			$bgobj.css({backgroundPosition: coords});

		}); // end window scroll

	});

});