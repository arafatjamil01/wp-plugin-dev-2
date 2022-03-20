<?php
namespace Wedevs\Academy\Admin;

/**
 * The Menu Header Class
 */
class Menu {
	function __construct() {
		add_action( 'admin_menu', [ $this, 'admin_menu' ] );
	}

	public function admin_menu() {
		add_menu_page( __( 'weDevs Academy', 'weac' ), __( 'Academy', 'weac' ), 'manage_options', 'wedevs-academy', [ $this, 'plugin_page' ], 'dashicons-welcome-learn-more'  );
	}

	public function plugin_page(){
		echo 'Hello World';
	}
}