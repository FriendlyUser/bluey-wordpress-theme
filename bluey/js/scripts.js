(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		if (!Modernizr.svg) {
			$(".logo img").attr("src", "images/logo.png");
		}
		// DOM ready, take it away
		$('#navbar-hide-button').click(function(e) {
			console.log(e);	
			// get hardcoded navbar id
			var $target = $("#navbar-content-mobile");
			if ($target.hasClass('hidden')) {
				$target.removeClass('hidden').addClass('block');
			} else {
				$target.removeClass('block').addClass('hidden');
			}
		});
	});
})(jQuery, this);
