<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Elegant_Appointment_Booking
 * @subpackage Elegant_Appointment_Booking/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Elegant_Appointment_Booking
 * @subpackage Elegant_Appointment_Booking/admin
 * @author     Your Name <email@example.com>
 */
class Elegant_Appointment_Booking_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $elegant_appointment_booking    The ID of this plugin.
	 */
	private $elegant_appointment_booking;

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
	 * @param      string    $elegant_appointment_booking       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $elegant_appointment_booking, $version ) {

		$this->elegant_appointment_booking = $elegant_appointment_booking;
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
		 * defined in Elegant_Appointment_Booking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elegant_Appointment_Booking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

		wp_enqueue_style( $this->elegant_appointment_booking, plugin_dir_url( __FILE__ ) . 'css/elegant-appointment-booking-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elegant_Appointment_Booking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elegant_Appointment_Booking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->elegant_appointment_booking, plugin_dir_url( __FILE__ ) . 'js/elegant-appointment-booking-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'bootstrap-js' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
	}

}



add_action( 'admin_menu', 'elegant_appointment_booking_menu' );

function elegant_appointment_booking_menu() {
	add_menu_page('Elegant Booking Appointment', 'Elegant Booking Appointment', 'manage_options', 'elegant-appointment-booking-top-level-handle', 'elegant_appointment_booking_options');

	add_submenu_page( 'elegant-appointment-booking-top-level-handle', 'Services', 'Services', 'manage_options', 'services-handle', 'elegant_appointment_booking_services_output');

	add_submenu_page( 'elegant-appointment-booking-top-level-handle', 'Staff Members', 'Staff Members', 'manage_options', 'staff-members-handle', 'elegant_appointment_booking_staff_members_output');
}


function elegant_appointment_booking_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'partials/elegant-appointment-booking-admin-display-main.php';
}

function elegant_appointment_booking_services_output() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'partials/elegant-appointment-booking-admin-display-services.php';
}


function elegant_appointment_booking_staff_members_output() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'partials/elegant-appointment-booking-admin-display-staff-members.php';
}
?>