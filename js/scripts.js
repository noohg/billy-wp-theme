(function ($, root, undefined) {

	$(function () {

		'use strict';

		// OWL CAROUSEL
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 1,
			nav:true,
			loop: true,
			margin: 0,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true
		});

	});

})(jQuery, this);
