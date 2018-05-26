<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://etienne-mommalier.fr/
 * @since             1.0.0
 * @package           Pav_Json_Microdata
 *
 * @wordpress-plugin
 * Plugin Name:       Pav Json Microdata
 * Plugin URI:        https://etienne-mommalier.fr/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Etienne Mommalier
 * Author URI:        https://etienne-mommalier.fr/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pav-json-microdata
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pav-json-microdata-activator.php
 */
function activate_pav_json_microdata() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pav-json-microdata-activator.php';
	Pav_Json_Microdata_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pav-json-microdata-deactivator.php
 */
function deactivate_pav_json_microdata() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pav-json-microdata-deactivator.php';
	Pav_Json_Microdata_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pav_json_microdata' );
register_deactivation_hook( __FILE__, 'deactivate_pav_json_microdata' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pav-json-microdata.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pav_json_microdata() {
	
	/**
	 * Update checker
	 *
	 * @author Yahnis Elsts
	 * @link https://github.com/YahnisElsts/plugin-update-checker
	 */
	require plugin_dir_path( __FILE__ ) . 'includes/plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
			'https://github.com/DoudouMoii/Pav-Json-Microdata',
			__FILE__,
			'pav-json-microdata'
	);
	$myUpdateChecker->setBranch('master');

	$plugin = new Pav_Json_Microdata();
	$plugin->run();

}
run_pav_json_microdata();
