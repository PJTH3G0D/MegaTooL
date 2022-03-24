<?php

/**
 * The plugin bootstrap file
 *
 * Project SeoMegaTool is aimed at Automating the most important task to new businesses.
 * Business that arent new can also take advantage of this breakthrough plugin.
 * Let the Automation begin, starts the plugin!
 *
 * @link              https://cellphonem3ga.com
 * @since             1.0.0
 * @package           Megatool
 * @wordpress-plugin
 * Plugin Name:       SeoMegaTool ™
 * Plugin URI:        https://cellphonem3ga.com
 * Description:       Automated SEO Operations, Instantly Rank your page on Google, Optimize your website.
 * Version:           1.0.0
 * Author:            Cellphonemega LLc
 * Author URI:        https://cellphonem3ga.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       megatool
 * Domain Path:       /languages
 * ...............................................................................................
 *                    
 *                            SeoMegaTool™ includes a host of extra MegaTools, 
 *             even a tool to identify missing or incorrect business listings and fix it.
 */                  
//................................................................................................

/**
 * Current plugin version.                                               
 * Starts at version 1.0.0 and use SemVer - https://semver.orgm             
 * Rename this for your plugin and update it as you release new versions.  
 *                                                                         
 **/
// Defines Plugin:
define( 'MEGATOOL_VERSION', '1.0.0' );

// This code runs during plugin activation:
function activate_megatool() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-megatool-activator.php';
	Megatool_Activator::activate();
}

/*
 *  The code that runs during plugin deactivation.
 *  This action is documented in includes/class-megatool-deactivator.php
 */
// This code runs during plugin deactivation:
function deactivate_megatool() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-megatool-deactivator.php';
	Megatool_Deactivator::deactivate();
}


//...............................................................................................
// Registers Activation Hooks For The Plugin:
register_activation_hook( __FILE__, 'activate_megatool' );
register_deactivation_hook( __FILE__, 'deactivate_megatool' );



/*
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
  require plugin_dir_path( __FILE__ ) . 'includes/class-megatool.php';



/*.
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
// Magical Exicution function:
function run_megatool() {
    $plugin = new Megatool();
	$plugin->run();
}
run_megatool('wp_enqueue_styles', 'wp_enqueue_scripts', "");



