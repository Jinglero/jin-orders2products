<?php
/**
 * This is the main jin-orders2products plugin file, here we declare and call the important stuff
 * @author Pedro García <jinglero@gmail.com>
 * @since 0.0.1
 * @package jin-orders2products
 */

/*
Plugin Name: Orders to Products by Jinglero
Plugin URI: http://jinglero.com/
Description: Plugin de Wordpress para realizar pedidos de productos cargados.
Version: 0.0.1
Author: Pedro García
Author URI: http://jinglero.com/
Requires at least: 4.2
Tested up to: 4.2
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )
	die( 'No script kiddies please!' );

//Definiciones de Constantes
define( 'JINO2P_PATH', plugin_dir_path( __FILE__ ) );
	

function jino2p_enqueue_statics(){
	wp_enqueue_script( 'jin-orders2products-front', plugins_url('jin-orders2products/static/js/').'jin-orders2products-front.js', array( 'jquery', 'jin-orders2products-maplace' ));
	wp_enqueue_style( 'jin-orders2products-css', plugins_url('jin-orders2products/static/css/').'jin-orders2products-front.css');
}

if(is_admin()){
	//Incluyo admin
	include(JINO2P_PATH.'/jin-orders2products-admin/jin-orders2products-admin.php');
}else{

	include(JINO2P_PATH.'/jin-orders2products-front.php');
	//Actions
	add_action( 'wp_print_scripts', 'enqueue_statics' ); // Incluye los javascripts y css necesarios para el pluging
}


