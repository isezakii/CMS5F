<?php
// Daftarkan menu
function utm_theme_setup() {
register_nav_menus(array(
'primary' => __('Primary Menu', 'utm-theme'),
));
}
add_action('after_setup_theme', 'utm_theme_setup');
// Enqueue stylesheet
function utm_theme_scripts() {
wp_enqueue_style('utm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'utm_theme_scripts');
?>