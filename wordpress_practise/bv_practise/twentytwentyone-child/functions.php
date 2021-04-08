<?php
/* enqueue scripts and style from parent theme 
 * Twenty Twenty-One theme uses get_template_directory() to load its stylesheet
 * Need to enqueue the child theme's stylesheet using the wp_enqueue_scripts action
*/
function twentytwentyone_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
    array( 'twenty-twenty-one-style' ),
    wp_get_theme()->get('Version') // only works if Version is in the style header
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyone_styles');
?>