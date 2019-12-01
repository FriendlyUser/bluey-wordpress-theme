<?php
add_action('customize_register','my_customize_register');
function my_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'Hero', array(
        'title' => __( 'Hero' ),
        'description' => __( 'Configure the Hero Heading on the Home Page' ),
        'panel' => '', // Not typically needed.
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    $wp_customize->add_setting( 'hero_image', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 
        // setting id 
        'hero_image', array(
        'label' => __( 'Featured Home Page Image', 'theme_textdomain' ),
        'section' => 'Hero',
        'mime_type' => 'image',
    ) ) );
    $wp_customize->add_setting( 'hero_image_caption', array(
        'default' => 'BLUEY WORDPRESS THEME',
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control( 'hero_image_caption', array(
        'default' => 'BLUEY WORDPRESS THEME',
        'type' => 'text',
        'section' => 'Hero',
        'label' => __( 'Caption Text' ),
        'description' => __( 'Animated Caption Text' )
    ) );
}

?>