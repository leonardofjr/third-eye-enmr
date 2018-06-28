<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Third_Eye_ENMR
 * @subpackage Third_Eye_ENMR/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Third_Eye_ENMR
 * @subpackage Third_Eye_ENMR/admin
 * @author     Your Name <email@example.com>
 */
class Third_Eye_ENMR_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $third_eye_enmr    The ID of this plugin.
	 */
	private $third_eye_enmr;

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
	 * @param      string    $third_eye_enmr       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $third_eye_enmr, $version ) {

		$this->third_eye_enmr = $third_eye_enmr;
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
		 * defined in Third_Eye_ENMR_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Third_Eye_ENMR_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

		wp_enqueue_style( $this->third_eye_enmr, plugin_dir_url( __FILE__ ) . 'css/third-eye-enmr-admin.css', array(), $this->version, 'all' );

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
		 * defined in Third_Eye_ENMR_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Third_Eye_ENMR_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->third_eye_enmr, plugin_dir_url( __FILE__ ) . 'js/third-eye-enmr-admin.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'ajax-script' , plugin_dir_url( __FILE__ ) . 'js/third-eye-enmr-ajax-query.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'bootstrap-js' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );

		
		/** Localize Scripts **/
		wp_localize_script( 'ajax-script', 'ajax_object', array( 
			'ajax_url' => admin_url( 'admin-ajax.php' ), 
			'we_value' => 1234 )
		);
		
	}


	public function third_eye_enmr_menu() {
		add_menu_page('Third Eye ENMR', 'Third Eye ENMR', 'manage_options', 'third-eye-enmr-top-level-handle', array(&$this, 'third_eye_enmr_options' ));

		add_submenu_page( 'third-eye-enmr-top-level-handle', 'Patients', 'Patients', 'manage_options', 'patients-handle', array($this, 'third_eye_enmr_output' ));

	}


	public function third_eye_enmr_options() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		include 'partials/third-eye-enmr-admin-display-main.php';
	}

	public function third_eye_enmr_output() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		include 'partials/third-eye-enmr-admin-display-patients.php';
	}

	function my_action() {
		global $wpdb; // this is how you get access to the database

		$whatever = intval( $_POST['whatever'] );

		$whatever += 10;

		echo $whatever;

		wp_die(); // this is required to terminate immediately and return a proper response
	}

}












?>