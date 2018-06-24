<?php
/**
*  @package Biplob45Plugin
*/
/*
Plugin Name: Biplob45 Plugin
Plugin URI: https://github.com/Biplob45/WordPress-Plugin-Development
Description: This is my first attempt on writing a custom plugin.
Version: 1.0.0
Author: Md.Badiuzzaman "Biplob45" Biplob
Author URI: https://github.com/Biplob45/WordPress-Plugin-Development
License: GPLv2 or later
Text Domain: biplob45-plugin
*/ 

/*
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is destributed in the hope that it will be useful, but WITHOUT ANY WARRENTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

Copyright 2005-2015 Automatic, Inc.
*/

/*
if ( ! defined('ABSPATH')) {
	die;
}
*/

defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );


if ( !class_exists( 'Biplob45Plugin' ) ){

/*
if ( ! function_exists( 'add_action' ) ) {
	echo 'Hey, you can\t access this file, you silly human!';
	exit;
}
*/

class Biplob45Plugin
{
	/*
	function __construct($string) {
		echo $string;
	}
	*/
/*
	public static function register() {
		add_action( 'admin_enqueue_scripts', array( 'Biplob45Plugin', 'enqueue' ) );
		
		// If you want this style to be enqueued front end of our website  not the backend  just simply  replace the admin_enqueue_scripts with the wp_enqueue_scripts.

		//add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

*/
	function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
		
		// If you want this style to be enqueued front end of our website  not the backend  just simply  replace the admin_enqueue_scripts with the wp_enqueue_scripts.

		//add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}


/*  Remove this two method and create  two file ...
	function activate() {
		require_once plugin_dir_path( __FILE__ ) . 'inc/biplob45-plugin-activate.php';
		Biplob45PluginActivate::activate();
		// generated a custom post type
		$this->custom_post_type();
		// flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate() {
		// flush rewrite rules
		flush_rewrite_rules();
	}
*/

/*
	function uninstall() {
		// delete custom post type
		// delete all the plugin data from the DB
	}
*/


	protected function custom_post_type() {
		//register_post_type( 'book', ['public' => true, 'label' => 'Books' ] );
		add_action( 'init', array( $this, 'custom_post_type' ) );
	}


	//static function enqueue() 
	static function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
		wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
	}




}



// if ( class_exists( 'Biplob45Plugin' ) ){
// $biplob45plugin = new Biplob45Plugin('Biplob45 Plugin Initialized');
  $biplob45plugin = new Biplob45Plugin();
  $biplob45plugin->register();

  //Biplob45Plugin::register();
//}



// activation
require_once plugin_dir_path( __FILE__ ) . 'inc/biplob45-plugin-activate.php';

//register_activation_hook( __FILE__, array( $biplob45plugin, 'activate' ) );
register_activation_hook( __FILE__, array( 'Biplob45PluginActivate' , 'activate' ) );

// deactivation
require_once plugin_dir_path( __FILE__ ) . 'inc/biplob45-plugin-deactivate.php';

//register_deactivation_hook( __FILE__, array( $biplob45plugin, 'deactivate' ) );
register_deactivation_hook( __FILE__, array( 'Biplob45PluginDeactivate', 'deactivate' ) );

/*
//uninstall
register_uninstall_hook( __FILE__, array( $biplob45plugin, 'uninstall' ) );
*/

}