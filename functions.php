<?php
/**
 * Raymond Bell theme - Elementor Compatible
 */

function raymond_bell_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    // Elementor theme support
    add_theme_support( 'elementor' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'appearance-tools' );
    
    register_nav_menu( 'primary', __( 'Primary Menu', 'raymond-bell' ) );
    register_nav_menu( 'footer', __( 'Footer Menu', 'raymond-bell' ) );
}
add_action( 'after_setup_theme', 'raymond_bell_theme_setup' );

function raymond_bell_enqueue_assets() {
    wp_enqueue_style(
        'raymond-bell-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'raymond-bell-style',
        get_stylesheet_uri(),
        array( 'raymond-bell-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'raymond_bell_enqueue_assets' );

// Elementor page builder compatibility
function raymond_bell_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'raymond_bell_register_elementor_locations' );

// Remove theme widget styles to avoid conflicts
add_filter( 'elementor/frontend/print_google_fonts', '__return_false' );
