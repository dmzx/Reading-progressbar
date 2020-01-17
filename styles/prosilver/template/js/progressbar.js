(function( $ ) {
	'use strict';

	$(window).on('load', function(){

		var winHeight = $(window).height(),	docHeight = $(document).height();
		var max = docHeight - winHeight;
		$('.readingProgressbar').attr('max', max);

		var progressForeground = $('.readingProgressbar').attr('data-foreground');
		var progressBackground = $('.readingProgressbar').attr('data-background');
		var progressHeight = $('.readingProgressbar').attr('data-height');
		var progressPosition = $('.readingProgressbar').attr('data-position');
		var progressFixedOrAbsolute = 'fixed';

		if (progressPosition == '0') {
			var progressTop = '0';
			var progressBottom = 'auto';
		} else {
			var progressTop = 'auto';
			var progressBottom = '0';
		}

		$('.readingProgressbar').css({
			'background-color' : progressBackground,
			'color' :	progressForeground,
			'height' :	progressHeight + 'px',
			'top' : progressTop,
			'bottom' : progressBottom,
			'position' : progressFixedOrAbsolute,
			'display' : 'block'
		});

		$('<style>.readingProgressbar::-webkit-progress-bar { background-color: transparent } .readingProgressbar::-webkit-progress-value { background-color: ' + progressForeground + ' } .readingProgressbar::-moz-progress-bar { background-color: ' + progressForeground + ' }</style>')
		.appendTo('head');

		var value = $(window).scrollTop();
		$('.readingProgressbar').attr('value', value);

		$(document).on('scroll', function() {
			value = $(window).scrollTop();
			$('.readingProgressbar').attr('value', value);
		});
	});

})( jQuery );