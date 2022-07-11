<?php
if (!is_admin()) {
wp_enqueue_script('rd88_main-js', get_template_directory_uri() . '/assets/js/app.js', null, null, true);
wp_enqueue_style('rd88_main_css', get_template_directory_uri() . '/assets/css/app.css');
}
// add_filter('show_admin_bar', '__return_false');
add_theme_support( 'custom-logo' );
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Menu główne'),
        )
    );
}

add_action('init', 'register_menus');
