<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://etienne-mommalier.fr/
 * @since      1.0.0
 *
 * @package    Pav_Json_Microdata
 * @subpackage Pav_Json_Microdata/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pav_Json_Microdata
 * @subpackage Pav_Json_Microdata/includes
 * @author     Etienne Mommalier <etienne@mommalier.fr>
 */
class Pav_Json_Microdata_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pav-json-microdata',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
