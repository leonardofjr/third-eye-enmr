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
 * @package           Alternative_Medicine_Patient
 *
 * @wordpress-plugin
 * Plugin Name:       Alternative Medicine Patient
 * Plugin URI:        http://example.com/alternative-medicine-patient-uri/
 * Description:       Add appointment booking functionality to your website to enhance the user experience of your website.
 * Version:           1.0.0
 * Author:            Leonardo Felipa
 * Author URI:        http://lfelipa.ca/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       alternative-medicine-patient
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
define( 'Alternative_Medicine_Patient_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-alternative-medicine-patient-activator.php
 */
function activate_alternative_medicine_patient() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-alternative-medicine-patient-activator.php';
	Alternative_Medicine_Patient_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-alternative-medicine-patient-deactivator.php
 */
function deactivate_alternative_medicine_patient() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-alternative-medicine-patient-deactivator.php';
	Alternative_Medicine_Patient_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_alternative_medicine_patient' );
register_deactivation_hook( __FILE__, 'deactivate_alternative_medicine_patient' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-alternative-medicine-patient.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_alternative_medicine_patient() {

	$plugin = new Alternative_Medicine_Patient();
	$plugin->run();

}
run_alternative_medicine_patient();
