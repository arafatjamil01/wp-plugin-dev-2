<?php
namespace Wedevs\Academy\Admin;

/**
 * Addressbook handler class
 */
class Addressbook {

	/**
	 * Plugin Page routing
	 *
	 * @return void
	 */
	public function plugin_page() {
		$action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';

		switch ( $action ) {
			case 'new':
				$template = __DIR__ . '/views/address-new.php';
				break;

			case 'edit':
				$template = __DIR__ . '/views/address-edit.php';
				break;

			case 'view':
				$template = __DIR__ . '/views/address-view.php';
				break;

			default:
				$template = __DIR__ . '/views/address-list.php';
				break;
		}

		if ( file_exists( $template ) ) {
			include $template;
		}
	}

	/**
	 * Form Handler for adding new address
	 *
	 * @return void
	 */
	public function form_handler() {
		if ( ! isset( $_POST['submit_address'] ) ) {
			return;
		}

		if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-address' ) ) {
			wp_die( 'Are you cheating?' );
		}

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Not enough permissions.' );
		}

		var_dump($_POST);
		exit;
	}


}
