<?php
/**
 * Voice of Swami Theme Functions
 *
 * @package VoiceOfSwami
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── Theme Setup ──
function voiceofswami_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'voiceofswami' ),
        'footer'  => __( 'Footer Menu', 'voiceofswami' ),
    ) );
}
add_action( 'after_setup_theme', 'voiceofswami_setup' );

// ── Enqueue Styles & Scripts ──
function voiceofswami_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=DM+Sans:wght@300;400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'voiceofswami-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script( 'voiceofswami-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'voiceofswami_scripts' );

// ── Custom Image Sizes ──
add_image_size( 'portfolio-thumb', 600, 375, true );
add_image_size( 'travel-thumb', 600, 375, true );
add_image_size( 'hero-photo', 400, 400, true );

// ── Theme Customizer ──
function voiceofswami_customize( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'hero_section', array(
        'title'    => __( 'Hero Section', 'voiceofswami' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'hero_headline', array( 'default' => 'Building Digital Media, Stories & Businesses', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'hero_headline', array( 'label' => 'Headline', 'section' => 'hero_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'hero_subheadline', array( 'default' => "I'm Mohit Swami — Digital Media Strategist, Founder of Food Mood Media and Creator of Voice of Swami.", 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'hero_subheadline', array( 'label' => 'Subheadline', 'section' => 'hero_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'hero_video', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'hero_video', array( 'label' => 'Background Video', 'section' => 'hero_section', 'mime_type' => 'video' ) ) );

    $wp_customize->add_setting( 'hero_photo', array( 'default' => '', 'sanitize_callback' => 'absint' ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'hero_photo', array( 'label' => 'Hero Photo', 'section' => 'hero_section' ) ) );

    // Contact Info
    $wp_customize->add_section( 'contact_info', array(
        'title'    => __( 'Contact Information', 'voiceofswami' ),
        'priority' => 35,
    ) );

    $fields = array(
        'phone'            => array( 'Phone Number', '+91 9685602735' ),
        'email_vos'        => array( 'Email (Voice of Swami)', 'voiceofswami.business@gmail.com' ),
        'email_fmm'        => array( 'Email (Food Mood Media)', 'foodmoodmedia@gmail.com' ),
        'email_news'       => array( 'Email (News Unfolded)', 'newsunfolded.official@gmail.com' ),
        'instagram_vos'    => array( 'Instagram (Voice of Swami)', 'https://www.instagram.com/voiceofswami.official/' ),
        'instagram_fmm'    => array( 'Instagram (Food Mood Media)', 'https://www.instagram.com/foodmood.media/' ),
        'instagram_news'   => array( 'Instagram (News Unfolded)', 'https://www.instagram.com/news.unfolded/' ),
        'instagram_travel' => array( 'Instagram (100 Days of Freedom)', 'https://www.instagram.com/journeyofswami/' ),
        'youtube'          => array( 'YouTube', 'https://youtube.com/@voiceofswami' ),
        'linkedin'         => array( 'LinkedIn', 'https://linkedin.com/in/mohitswami' ),
        'twitter'          => array( 'Twitter / X', 'https://twitter.com/voiceofswami' ),
        'whatsapp_number'  => array( 'WhatsApp Number', '919685602735' ),
    );

    foreach ( $fields as $key => $info ) {
        $wp_customize->add_setting( $key, array( 'default' => $info[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $key, array( 'label' => $info[0], 'section' => 'contact_info', 'type' => 'text' ) );
    }
}
add_action( 'customize_register', 'voiceofswami_customize' );

// ── Custom Post Type: Portfolio ──
function voiceofswami_register_cpts() {
    register_post_type( 'portfolio', array(
        'labels' => array(
            'name' => 'Portfolio', 'singular_name' => 'Project',
            'add_new_item' => 'Add New Project', 'edit_item' => 'Edit Project',
        ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'portfolio' ),
    ) );

    register_post_type( 'travel_story', array(
        'labels' => array(
            'name' => 'Travel Stories', 'singular_name' => 'Travel Story',
            'add_new_item' => 'Add New Story', 'edit_item' => 'Edit Story',
        ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-airplane',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'travel' ),
    ) );

    register_post_type( 'news_article', array(
        'labels' => array(
            'name' => 'News Articles', 'singular_name' => 'News Article',
            'add_new_item' => 'Add New Article', 'edit_item' => 'Edit Article',
        ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-media-document',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'news' ),
    ) );
}
add_action( 'init', 'voiceofswami_register_cpts' );

// ── Contact Form Handler (AJAX) ──
function voiceofswami_handle_contact() {
    check_ajax_referer( 'voiceofswami_contact', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( 'Please fill all required fields.' );
    }

    $to      = get_theme_mod( 'email_vos', 'voiceofswami.business@gmail.com' );
    $subject = "New Contact: $name";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = array( 'Reply-To: ' . $email );

    if ( wp_mail( $to, $subject, $body, $headers ) ) {
        wp_send_json_success( 'Message sent successfully!' );
    } else {
        wp_send_json_error( 'Failed to send message. Please try again.' );
    }
}
add_action( 'wp_ajax_voiceofswami_contact', 'voiceofswami_handle_contact' );
add_action( 'wp_ajax_nopriv_voiceofswami_contact', 'voiceofswami_handle_contact' );

// ── Localize Script for AJAX ──
function voiceofswami_localize() {
    wp_localize_script( 'voiceofswami-main', 'vosAjax', array(
        'url'   => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'voiceofswami_contact' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'voiceofswami_localize' );
