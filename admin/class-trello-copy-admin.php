<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Trello_Copy
 * @subpackage Trello_Copy/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Trello_Copy
 * @subpackage Trello_Copy/admin
 * @author     Your Name <email@example.com>
 */
class Trello_Copy_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $trello_copy    The ID of this plugin.
	 */
	private $trello_copy;

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
	 * @param      string    $trello_copy       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $trello_copy, $version ) {

		$this->trello_copy = $trello_copy;
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
		 * defined in Trello_Copy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Trello_Copy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->trello_copy, plugin_dir_url( __FILE__ ) . 'css/trello-copy-admin.css', array(), $this->version, 'all' );

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
		 * defined in Trello_Copy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Trello_Copy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->trello_copy, plugin_dir_url( __FILE__ ) . 'js/trello-copy-admin.js', array( 'jquery' ), $this->version, false );

	}

}
