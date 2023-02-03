<?php


#region Load text domain
function edg_load_text_domain() {
	load_child_theme_textdomain( 'edg-translations', get_stylesheet_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'edg_load_text_domain' );
#endregion Load text domain


#region Enqueue scripts
#region General
function edg_enqueue_scripts() {
	wp_register_style( 'edg-child-main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'edg-child-main' );

	wp_register_script( 'edg-child-main', get_stylesheet_directory_uri() . '/assets/js/main.js', [], false, true );
	wp_enqueue_script( 'edg-child-main' );
	wp_localize_script( 'edg-child-main', 'edgData', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'currPostId' => get_the_ID(),
		'currPostUrl' => wp_get_shortlink()
	] );
}
add_action( 'wp_enqueue_scripts', 'edg_enqueue_scripts', 20 );
#endregion General


#region Login page
function edg_enqueue_scripts_login() {
	wp_register_style( 'edg-child-login', get_stylesheet_directory_uri() . '/assets/css/login.css' );
	wp_enqueue_style( 'edg-child-login' );
}
add_action( 'login_enqueue_scripts', 'edg_enqueue_scripts_login', 20 );
#endregion Login page


#region Admin area
function edg_enqueue_scripts_admin() {
	wp_register_style( 'edg-child-admin', get_stylesheet_directory_uri() . '/assets/css/admin.css' );
	wp_enqueue_style( 'edg-child-admin' );
}
add_action( 'admin_enqueue_scripts', 'edg_enqueue_scripts_admin', 20 );
#endregion Admin area
#endregion Enqueue scripts
