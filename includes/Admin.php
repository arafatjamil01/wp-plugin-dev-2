<?php
namespace Wedevs\Academy;

/**
 * The Admin Class
 */
class Admin {

	public function __construct() {
		$this->dispatch_actions();
		new Admin\Menu();
	}

	public function dispatch_actions() {
		$addressbook = new Admin\Addressbook();
		add_action( 'admin_init', [ $addressbook, 'form_handler' ] );
	}

}
