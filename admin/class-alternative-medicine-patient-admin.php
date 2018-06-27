<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Alternative_Medicine_Patient
 * @subpackage Alternative_Medicine_Patient/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Alternative_Medicine_Patient
 * @subpackage Alternative_Medicine_Patient/admin
 * @author     Your Name <email@example.com>
 */
class Alternative_Medicine_Patient_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $alternative_medicine_patient    The ID of this plugin.
	 */
	private $alternative_medicine_patient;

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
	 * @param      string    $alternative_medicine_patient       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $alternative_medicine_patient, $version ) {

		$this->alternative_medicine_patient = $alternative_medicine_patient;
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
		 * defined in Alternative_Medicine_Patient_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Alternative_Medicine_Patient_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

		wp_enqueue_style( $this->alternative_medicine_patient, plugin_dir_url( __FILE__ ) . 'css/alternative-medicine-patient-admin.css', array(), $this->version, 'all' );

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
		 * defined in Alternative_Medicine_Patient_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Alternative_Medicine_Patient_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->alternative_medicine_patient, plugin_dir_url( __FILE__ ) . 'js/alternative-medicine-patient-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'bootstrap-js' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
	}

}



add_action( 'admin_menu', 'alternative_medicine_patient_menu' );

function alternative_medicine_patient_menu() {
	add_menu_page('Altnerative Medicine Patient', 'Altnerative Medicine Patient', 'manage_options', 'alternative-medicine-patient-top-level-handle', 'alternative_medicine_patient_options');

	add_submenu_page( 'alternative-medicine-patient-top-level-handle', 'Patients', 'Patients', 'manage_options', 'patients-handle', 'alternative_medicine_patient_output');

}


function alternative_medicine_patient_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'partials/alternative-medicine-patient-admin-display-main.php';
}

function alternative_medicine_patient_output() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'partials/alternative-medicine-patient-admin-display-patients.php';
}


?>