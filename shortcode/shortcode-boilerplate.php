<?php
/**
 * Custom Shortcode
 *
 * Wrtie [cstmplchldr] in your post editor to render this shortcode.
 *
 * @package	 ABS
 * @since    1.0.0
 */

if ( ! function_exists( 'custom_func_name' ) ) {
	// Add the action.
	add_action( 'plugins_loaded', function() {
		// Add the shortcode.
		add_shortcode( 'cstmplchldr', 'custom_func_name' );
	});

	/**
	 * Name of this shortcode.
	 *
	 * @return string Shortcode output string.
	 * @since  1.0.0
	 */
	function custom_func_name() {
		// Just return the code.
		return '<script type="text/javascript">
				console.log("Shortcode Works");
				</script>';
	}
}
