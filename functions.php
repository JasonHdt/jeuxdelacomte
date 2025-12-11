<?php
// Enqueue styles and add basic theme support
function jeuxdelacomte_enqueue_styles() {
    // enqueue the theme stylesheet (style.css) so WP recognizes the theme
    wp_enqueue_style( 'jeuxdelacomte-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );

    // If you compile Tailwind to `src/output.css`, enqueue it too (prefered)
    $tailwind_path = get_template_directory() . '/src/output.css';
    if ( file_exists( $tailwind_path ) ) {
        wp_enqueue_style( 'jeuxdelacomte-output', get_template_directory_uri() . '/src/output.css', array('jeuxdelacomte-style'), filemtime( $tailwind_path ) );
    }

    // Enqueue the off-canvas script if it exists
    $offcanvas_path = get_template_directory() . '/scripts/off-canvas.js';
    if ( file_exists( $offcanvas_path ) ) {
        wp_enqueue_script( 'jeuxdelacomte-off-canvas', get_template_directory_uri() . '/scripts/off-canvas.js', array(), filemtime( $offcanvas_path ), true );
    }
}
add_action( 'wp_enqueue_scripts', 'jeuxdelacomte_enqueue_styles' );
// add_action('jeuxdelacomte_enqueue_styles' );

// Basic theme supports
add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'jeuxdelacomte' ),
    ) );
} );
