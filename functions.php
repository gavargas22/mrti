<?php
add_editor_style();

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'top_navigation', 'Main navigation' );
}
?>