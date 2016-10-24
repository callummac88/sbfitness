(function() {
	jQuery(function() {
		var byRow = jQuery('body');
		jQuery('.layer-row').each(function() {
			jQuery(this).children('.col-sm-6').matchHeight(byRow);
		});
	});
})();
