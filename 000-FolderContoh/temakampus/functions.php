<?php
// Daftarkan menu
function ugm_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ugm-theme'),
    ));
}
add_action('after_setup_theme', 'ugm_theme_setup');

// Enqueue stylesheet
function ugm_theme_scripts() {
    wp_enqueue_style('ugm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ugm_theme_scripts');
?>
