<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              shanepisko.com
 * @since             1.0.0
 * @package           Ancestral_Menus
 *
 * @wordpress-plugin
 * Plugin Name:       Ancestral Menus
 * Plugin URI:        https://github.com/shanepisko/ancestral-menus
 * Description:       Use your PAge PArenting to serve up the proper primary menu using ancestral menus 
 * Version:           1.0.0
 * Author:            Shane Pisko
 * Author URI:        shanepisko.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ancestral-menus
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ancestral-menus-activator.php
 */
function activate_ancestral_menus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ancestral-menus-activator.php';
	Ancestral_Menus_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ancestral-menus-deactivator.php
 */
function deactivate_ancestral_menus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ancestral-menus-deactivator.php';
	Ancestral_Menus_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ancestral_menus' );
register_deactivation_hook( __FILE__, 'deactivate_ancestral_menus' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ancestral-menus.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ancestral_menus() {

	$plugin = new Ancestral_Menus();
	$plugin->run();

}
run_ancestral_menus();
