jQuery( document ).ready(function( $ ) {

	// CODE HERE :)

	/**
	*
	*	MATCH HEIGHT BELOW	
	*
	**/

	(function ( $ ) { //inline jQuery plugin to match height of elements
	    $.fn.match_height = function(userOptions, callback) {
	    	var defaults = {
	    		mode:'maximum'
	    	};
	    	var options = $.extend({}, defaults, userOptions);
			if(options.mode == 'maximum') {
				var height=0;
			} else {
				var height = this.first().height();
			}
			this.each(function() {
				if(options.mode == 'maximum') {
					if($(this).height() > height) {
						height = $(this).height();
					}	
				} else if(options.mode == 'minimum') {
					if($(this).height() < height) {
						height = $(this).height();
					}
				}
			});
			this.each(function() {
				$(this).height(height);
			});
			if(typeof callback == 'function') {
				callback.call(this);
			}
			return height;
		};
	}( jQuery ));

});