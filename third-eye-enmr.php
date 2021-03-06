<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Third_Eye_ENMR
 *
 * @wordpress-plugin
 * Plugin Name:       Third Eye ENMR
 * Plugin URI:        http://example.com/third-eye-enmr-uri/
 * Description:       Add appointment booking functionality to your website to enhance the user experience of your website.
 * Version:           1.0.0
 * Author:            Leonardo Felipa
 * Author URI:        http://lfelipa.ca/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       third-eye-enmr
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
define( 'Third_Eye_ENMR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-third-eye-enmr-activator.php
 */
function activate_third_eye_enmr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-third-eye-enmr-activator.php';
	Third_Eye_ENMR_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-third-eye-enmr-deactivator.php
 */
function deactivate_third_eye_enmr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-third-eye-enmr-deactivator.php';
	Third_Eye_ENMR_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_third_eye_enmr' );
register_deactivation_hook( __FILE__, 'deactivate_third_eye_enmr' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-third-eye-enmr.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_third_eye_enmr() {

	$plugin = new Third_Eye_ENMR();
	$plugin->run();

}
run_third_eye_enmr();
