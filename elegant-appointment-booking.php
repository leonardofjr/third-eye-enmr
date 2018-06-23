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
 * @package           Elegant_Appointment_Booking
 *
 * @wordpress-plugin
 * Plugin Name:       Elegant Appointment Booking
 * Plugin URI:        http://example.com/elegant-appointment-booking-uri/
 * Description:       Add appointment booking functionality to your website to enhance the user experience of your website.
 * Version:           1.0.0
 * Author:            Leonardo Felipa
 * Author URI:        http://lfelipa.ca/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       elegant-appointment-booking
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
define( 'ELEGANT_APPOINTMENT_BOOKING_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-elegant-appointment-booking-activator.php
 */
function activate_elegant_appointment_booking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elegant-appointment-booking-activator.php';
	Elegant_Appointment_Booking_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-elegant-appointment-booking-deactivator.php
 */
function deactivate_elegant_appointment_booking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elegant-appointment-booking-deactivator.php';
	Elegant_Appointment_Booking_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_elegant_appointment_booking' );
register_deactivation_hook( __FILE__, 'deactivate_elegant_appointment_booking' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-elegant-appointment-booking.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_elegant_appointment_booking() {

	$plugin = new Elegant_Appointment_Booking();
	$plugin->run();

}
run_elegant_appointment_booking();
