(function ($, root, undefined) {
	
	$(function () {	
		'use strict';
		// DOM ready, take it away
		// Animations for header image
		function animateCSS(element, animationName, delayLength, callback) {
			const node = document.querySelector(element);
			// validate class exists is not null
			node.classList.add('animated', animationName, delayLength);
	
			function handleAnimationEnd() {
					node.classList.remove('animated', animationName);
					node.removeEventListener('animationend', handleAnimationEnd);
	
					if (typeof callback === 'function') callback();
			}
	
			node.addEventListener('animationend', handleAnimationEnd);
		}
		// const heroImage =  document.querySelector('.hero-landing-page');
		// heroImage.classList.add('animated', 'fadeIn', 'delay-1s');
		animateCSS('.landing-hero-img', 'fadeIn', 'delay-1s', function() {
			// const heroOverlay = document.getElementById('#hero-landing-overlay');
			// console.log(heroOverlay);
			$('.landing-hero-overlay-text')
				.addClass('unhidden-element')
				.addClass('light-white-more-blue')
				.removeClass('hidden-element');
			animateCSS('.landing-hero-overlay-text', 'rollIn', 'delay-1s');
		})
		if (!Modernizr.svg) {
			$(".logo img").attr("src", "images/logo.png");
		}
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
