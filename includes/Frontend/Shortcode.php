<?php
namespace Wedevs\Academy\Frontend;

class Shortcode {

	function __construct() {
		add_shortcode( 'wedevs-academy', [ $this, 'render_shortcode' ] );
	}

	/**
	 * Shortcode render class
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	function render_shortcode( $atts, $content = '' ) {
		return 'Hello from shortcode';
	}
}