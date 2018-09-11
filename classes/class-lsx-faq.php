<?php
namespace lsx;

/**
 * Main Class
 *
 * @package   LSX FAQ
 * @author    LightSpeed
 * @license   GPL-3.0+
 * @link
 * @copyright 2017 LightSpeedDevelopment
 */
class LSX_FAQ {
	/**
	 * Holds the admin class
	 * @var array
	 */
	var $admin = false;
	/**
	 * Holds the admin class
	 * @var array
	 */
	var $frontend = false;
	/**
	 * Holds instance of the class
	 */
	private static $instance;
	/**
	 * Constructor.
	 */
	public function __construct() {
		require_once( LSX_FAQ_PATH . 'classes/class-lsx-faq-admin.php' );
		require_once( LSX_FAQ_PATH . 'classes/class-lsx-faq-frontend.php' );
		$this->setup();
	}
	/**
	 * Return an instance of this class.
	 *
	 * @return  object
	 */
	public static function init() {
		// If the single instance hasn't been set, set it now.
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	/**
	 * Setup hooks and text load domain
	 */
	public function setup() {
		$this->admin = LSX_FAQ_Admin::init();
		//$this->frontend = new LSX_Faq_Frontend();
	}
}
