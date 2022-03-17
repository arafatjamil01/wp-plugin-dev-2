<?php
/**
 * Plugin Name:       Wedevs Academy
 * Plugin URI:        https://github.com/arafatjamil01/wp-plugin-dev-2
 * Description:       A plugin from tutorial
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Arafat Jamil
 * Author URI:        https://github.com/arafatjamil01
 * Text Domain:       aj
 * License:           GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || exit;

/**
 * The Main Plugin Class
 */
final class Wedevs_Academy {

	// Plugin version
	const VERSION = '1.0';

	/**
	 * Class constructor, following singleton pattern
	 * The construct is kept private, so that it can't be accessed with another object instantiation
	 * other than init() function
	 */
	private function __construct() {
		$this->define_constants();

		register_activation_hook();
	}

	/**
	 * Initialize a singleton instance of Wedevs_Academy Class
	 *
	 * @return \Wedevs_Academy
	 * The \Wedevs_..., here \ is used to denote we are in root namespace
	 */
	public static function init() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}

	/**
	 * Define required plugin constants
	 *
	 * @return void
	 */
	public function define_constants() {
		define( 'WD_ACADEMY_VERSION', self::VERSION );
		define( 'WD_ACADEMY_FILE', __FILE__ );
		define( 'WD_ACADEMY_DIR', __DIR__ );
		define( 'WD_ACADEMY_URL', plugins_url('', WD_ACADEMY_FILE ) );
		define( 'WD_ACADEMY_ASSETS', WD_ACADEMY_URL . '/assets' );
	}
}

/**
 * Initializes the main plugin
 *
 * @return \Wedevs_Academy
 */
function wedevs_academ() {
	return Wedevs_Academy::init();
}

// kick off the plugin
wedevs_academ();