<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function strappress_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'strappress'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'strappress'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'strappress'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'strappress'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'strappress'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'strappress'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'strappress_widgets_init');