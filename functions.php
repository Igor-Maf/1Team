<?php

/** Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/theme-filters.php';


if ( ! function_exists( 'ot_setup' ) ) :
    function ot_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain( 'ot', get_template_directory() . '/languages' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        /* add_theme_support( 'html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ) ); */

        /* Enable support for custom logo. */
        add_theme_support( 'custom-logo', array(
            'height'      => 240,
            'width'       => 240,
            'flex-height' => true
        ) );

        /* Enable support for Post Thumbnails on posts and pages. */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1200, 9999 );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'ot' ),
            'social'  => __( 'Social Links Menu', 'ot' ),
        ) );
    }
endif;

add_action( 'after_setup_theme', 'ot_setup' );


/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
function ot_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'ot_content_width', 840 );
}

add_action( 'after_setup_theme', 'ot_content_width', 0 );


/** Enqueues scripts and styles. */
function ot_assets() {
//    wp_enqueue_style( 'ot-style', get_stylesheet_uri() );

    wp_enqueue_style(
        'bootstrap-grid',
        get_template_directory_uri() . '/assets/styles/libs/bootstrap.min.css',
        array(),
        '3.3.5'
    );

    wp_enqueue_style( 'ot-theme', get_template_directory_uri() . '/assets/styles/styles.css' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'ot_assets' );