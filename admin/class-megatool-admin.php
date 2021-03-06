<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://cellphonem3ga.com
 * @since      1.0.0
 * @package    Megatool
 * @subpackage Megatool/includes
 * @author     Cellphonemega LLc <mail@cellphonemega.com>
 */
// If this file is called directly, Abort.!!!!!!!
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 */
class Megatool_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Megatool_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Megatool_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/megatool-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Megatool_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Megatool_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/megatool-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

	}
	// ....................................................................................
// Adds Main Menu:
function seomegatool_admin_menu(){
	 // Adds Menu Pages:
		add_menu_page('SeoMegaTool', 'SeoMegaTool ???', 'manage_options', 'seomegatool_admin_menu', 'seomegatool_dashboard','ame-fa-gears',);
	// Adds Submenu Page:
		add_submenu_page('seomegatool_admin_menu', 'Management', 'Management', 'manage_options', 'management','management','ame-fa-gear');
		add_submenu_page('seomegatool_admin_menu', 'Automation', 'Automation', 'manage_options', 'automation','automation','ame-fa-gear');
}}
	// ...................................................................................


// Adds functions to the menu pages:
function seomegatool_dashboard(){
	//Code Goes Here For Menu Function
   //->
}

function management(){
	// Code Goes Here For Menu Function
include('wpgel-localseo.php');
}

function automation(){
// Code Goes Here For Menu Function
//->
}

