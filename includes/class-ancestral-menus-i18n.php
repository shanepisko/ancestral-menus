<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       shanepisko.com
 * @since      1.0.0
 *
 * @package    Ancestral_Menus
 * @subpackage Ancestral_Menus/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ancestral_Menus
 * @subpackage Ancestral_Menus/includes
 * @author     Shane Pisko <shanepisko@gmail.com>
 */
class Ancestral_Menus_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ancestral-menus',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
