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

	wp_register_style( 'edg-child-tinymce', get_stylesheet_directory_uri() . '/assets/css/tinymce-editor.css' );
	wp_enqueue_style( 'edg-child-tinymce' );

	wp_register_script( 'edg-child-main', get_stylesheet_directory_uri() . '/assets/js/main.js', [], false, true );
	wp_enqueue_script( 'edg-child-main' );
	wp_localize_script( 'edg-child-main', 'edgData', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'currPostId' => get_the_ID(),
		'currPostUrl' => wp_get_shortlink(),
		'lang' => [
			'example1' => __( 'Beispiel 1', 'edg-translations' ),
			'example2' => __( 'Beispiel 2', 'edg-translations' )
		]
	] );
}
add_action( 'wp_enqueue_scripts', 'edg_enqueue_scripts', 20 );
#endregion General


#region TinyMCE editor
function edg_enqueue_scripts_tinymce( $settings ) {
	if ( is_admin() ) return $settings;

	$settings[ 'content_css' ] = get_stylesheet_directory_uri() . '/assets/css/tinymce-editor.css';
	return $settings;
}
add_action( 'tiny_mce_before_init', 'edg_enqueue_scripts_tinymce', 20 );
#endregion TinyMCE editor


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


#region Add Favicon
function edg_add_favicon() {
	$path = get_stylesheet_directory_uri() . '/favicons/';
	$file_light_mode = $path . 'light-mode';
	$file_dark_mode = $path . 'dark-mode';
	$is_light_mode = '(prefers-color-scheme: light)';
	$is_dark_mode = '(prefers-color-scheme: dark)';

	echo '
		<link rel="icon" href="' . $file_light_mode . '.png" media="' . $is_light_mode . '">
		<link rel="apple-touch-icon" href="' . $file_light_mode . '.png" media="' . $is_light_mode . '">
		<link rel="icon" href="' . $file_light_mode . '.svg" media="' . $is_light_mode . '">
		<link rel="apple-touch-icon" href="' . $file_light_mode . '.svg" media="' . $is_light_mode . '">

		<link rel="icon" href="' . $file_dark_mode . '.png" media="' . $is_dark_mode . '">
		<link rel="apple-touch-icon" href="' . $file_dark_mode . '.png" media="' . $is_dark_mode . '">
		<link rel="icon" href="' . $file_dark_mode . '.svg" media="' . $is_dark_mode . '">
		<link rel="apple-touch-icon" href="' . $file_dark_mode . '.svg" media="' . $is_dark_mode . '">
	';
}
add_action( 'wp_head', 'edg_add_favicon', 999999 );
#endregion Add Favicon
