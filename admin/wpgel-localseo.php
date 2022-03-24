<?php
/**
 * adds admin-specific functionality to the plugin.
 *
 * @link       https://cellphonem3ga.com
 * @since      1.0.0
 * @package    Megatool
 * @subpackage Megatool/includes
 * @author     Cellphonemega LLc <mail@cellphonemega.com>
 
 * Assign Global Variable
 */
 $options = array();
/* 
* Adds a link to the Admin Menu for the Plugin settings. 
* This link is located at 'Settings > Local SEO' 
*/
/* 
* Menu Page Content
*/
	global $wpgel_plugin_url;
	global $options;
	
	if( isset( $_POST['wpgel_localseo_form_submitted'] ) ) {
		$hidden_field = esc_html( $_POST['wpgel_localseo_form_submitted'] );
		if( $hidden_field == 'Y' ) {
			$wpgel_localseo_name 			= esc_html( $_POST['wpgel_localseo_name'] );
			$wpgel_localseo_address 		= esc_html( $_POST['wpgel_localseo_address'] );
			$wpgel_localseo_city 			= esc_html( $_POST['wpgel_localseo_city'] );
			$wpgel_localseo_state 			= esc_html( $_POST['wpgel_localseo_state'] );
			$wpgel_localseo_zip 			= esc_html( $_POST['wpgel_localseo_zip'] );
			$wpgel_localseo_phone 			= esc_html( $_POST['wpgel_localseo_phone'] );
			$wpgel_localseo_website 		= esc_html( $_POST['wpgel_localseo_website'] );
			$wpgel_localseo_googleplus 		= esc_html( $_POST['wpgel_localseo_googleplus'] );
			$wpgel_localseo_youtube 		= esc_html( $_POST['wpgel_localseo_youtube'] );
			
			$options['wpgel_localseo_name']			= $wpgel_localseo_name;
			$options['wpgel_localseo_address']		= $wpgel_localseo_address;
			$options['wpgel_localseo_city']			= $wpgel_localseo_city;
			$options['wpgel_localseo_state']		= $wpgel_localseo_state;
			$options['wpgel_localseo_zip']			= $wpgel_localseo_zip;
			$options['wpgel_localseo_phone']		= $wpgel_localseo_phone;
			$options['wpgel_localseo_website']		= $wpgel_localseo_website;
			$options['wpgel_localseo_googleplus']	= $wpgel_localseo_googleplus;
			$options['wpgel_localseo_youtube']		= $wpgel_localseo_youtube;
			$options['last_updated']				= time();
			
			update_option( 'wpgel_localseo_options', $options );
			
		}
	}
	
	$options = get_option( 'wpgel_localseo_options' );
	if( $options != '' ) {
		
		$wpgel_localseo_name = $options['wpgel_localseo_name'];
		$wpgel_localseo_address = $options['wpgel_localseo_address'];
		$wpgel_localseo_city = $options['wpgel_localseo_city'];
		$wpgel_localseo_state = $options['wpgel_localseo_state'];
		$wpgel_localseo_zip = $options['wpgel_localseo_zip'];
		$wpgel_localseo_phone = $options['wpgel_localseo_phone'];
		$wpgel_localseo_website = $options['wpgel_localseo_website'];
		$wpgel_localseo_googleplus = $options['wpgel_localseo_googleplus'];
		$wpgel_localseo_youtube = $options['wpgel_localseo_youtube'];
	}
	
	require( 'inc/options-page-wrapper.php' );
	


function wpgel_localseo_styles() {
	$wpgel_plugin_url = plugin_dir_url( __FILE__ ) .'wpgel-localseo.php';
	wp_enqueue_style( 'wpgel_localseo_styles', $wpgel_plugin_url . 'css/wpgel-localseo.css' );	
}
add_action( 'admin_head', 'wpgel_localseo_styles' );


function wpgel_localseo_bootstrap_styles($hook) {
	global $wpgel_localseo_settings_page;
	$wpgel_plugin_url = plugin_dir_url( __FILE__ );
      if   ( $hook == $wpgel_localseo_settings_page ) { 
          wp_enqueue_style( 'wpgel_localseo_bootstrap_styles', $wpgel_plugin_url . 'css/bootstrap.min.css');
		  wp_enqueue_script( 'wpgel_localseo_bootstrap_script', $wpgel_plugin_url . 'js/bootstrap.min.js');
      }
}
add_action('admin_enqueue_scripts', 'wpgel_localseo_bootstrap_styles');

