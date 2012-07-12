<?php
add_editor_style();

$args = array(
	'width'         => 1024,
	'height'        => 340,
	'default-image' => get_template_directory_uri() . '/images/backgrounds/01.jpg',
	'uploads'       => true,
);

add_theme_support( 'custom-header', $args );
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'top_navigation', 'Main navigation' );
}
?>