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
		$parent_slug = 'wedevs-academy';
		$capability  = 'manage_options';
		add_menu_page( __( 'weDevs Academy', 'weac' ), __( 'Academy', 'weac' ), $capability, $parent_slug, [ $this, 'addressbook_page' ], 'dashicons-welcome-learn-more' );
		add_submenu_page( $parent_slug, __( 'Address Book', 'weac' ), __( 'Address Book', 'weac' ), $capability, $parent_slug, [ $this, 'addressbook_page' ] );
		add_submenu_page( $parent_slug, __( 'Addressbook Settings', 'weac' ), __( 'Settings', 'weac' ), $capability, 'wedevs-academy-addressbook', [ $this, 'settings_page' ] );
	}

	public function addressbook_page() {
		$addressbook = new Addressbook();
		$addressbook->plugin_page();
	}

	public function settings_page() {
		echo 'settings page';
	}
}
