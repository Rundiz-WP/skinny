<?php
/** 
 * Skinny theme.
 * 
 * This file is not required by WordPress nor Theme Check but use it for theme functional/features purpose.
 * 
 * @package skinny
 * @since 0.1
 * @license http://opensource.org/licenses/MIT MIT
 */


if (!function_exists('skinnyEnqueueScripts')) {
    /**
     * Enqueue styles and scripts.
     */
    function skinnyEnqueueScripts()
    {
        $theme = wp_get_theme();
        $themeVersion = $theme->get('Version');
        if (!is_string($themeVersion) || empty($themeVersion)) {
            $themeVersion = false;
        }
        unset($theme);

        wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], $themeVersion);
        wp_enqueue_style('design', get_stylesheet_directory_uri() . '/assets/css/design.css', [], $themeVersion);
        unset($themeVersion);
    }// skinnyEnqueueScripts
}
add_action('wp_enqueue_scripts', 'skinnyEnqueueScripts');


if (!function_exists('skinnyAddThemeSupport')) {
    /**
     * Add theme feature.
     */
    function skinnyAddThemeSupport()
    {
        // `load_theme_textdomain()` is not required by WordPress nor Theme Check.
        // `load_theme_textdomain()` is for load translation correctly.
        load_theme_textdomain('skinny', get_template_directory() . '/languages');

        add_theme_support('title-tag');// required by Theme Check.
        add_theme_support('automatic-feed-links');// required by Theme Check.
    }// skinnyAddThemeSupport
}
add_action('after_setup_theme', 'skinnyAddThemeSupport');


if (!function_exists('skinnyRegisterSidebars')) {
    /**
     * Register sidebars.
     * 
     * This is not required by WordPress nor Theme Check.
     */
    function skinnyRegisterSidebars()
    {
        register_sidebar([
            'name' => __('Sidebar right', 'skinny'),
            'id' => 'sidebar',
        ]);
    }// skinnyRegisterSidebars
}
add_action('widgets_init', 'skinnyRegisterSidebars');