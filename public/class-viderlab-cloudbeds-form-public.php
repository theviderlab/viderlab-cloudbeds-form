<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://viderlab.com
 * @since      1.0.0
 *
 * @package    ViderLab_Cloudbeds_Form
 * @subpackage ViderLab_Cloudbeds_Form/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    ViderLab_Cloudbeds_Form
 * @subpackage ViderLab_Cloudbeds_Form/public
 * @author     ViderLab <contacto@viderlab.com>
 */
class ViderLab_Cloudbeds_Form_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/viderlab-cloudbeds-form-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/viderlab-cloudbeds-form-public.js', array( 'jquery' ), $this->version, false );
	
	}

    /**
	 * Shortcode callback to show featured package.
	 *
	 * @since    1.0.0
	 */
	public function show_coudbeds_form( $atts = [], $content = null ) {

        // normalize attribute keys, lowercase
        $atts = array_change_key_case( (array) $atts, CASE_LOWER );
        
        // override default attributes with user attributes
        $full_atts = shortcode_atts(
            array(
				'button_text' => __('Search', 'viderlab-cloudbeds-form'),
            ), $atts, $tag
        );    

		// Sanitize
		$full_atts['button_text'] = sanitize_text_field($full_atts['button_text']);

        $settings = get_option( 'viderlab-cloudbeds-form-settings_options' );

        ob_start();
        require plugin_dir_path( __FILE__ ) . 'partials/viderlab-cloudbeds-form-public-display.php';
        $s = ob_get_clean();

        return $s;
    }
}
