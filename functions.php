<?php

function plusplus_scripts(){
    /* adding styles*/
    
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('social-core', get_template_directory_uri() . '/css/bootstrap-social.css');
    wp_enqueue_style('docs-core', get_template_directory_uri() . '/assets/css/docs.css');
    wp_enqueue_style('font-core', get_template_directory_uri() . '/assets/css/font-awesome.css');
     wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    /* adding scripts*/
    wp_enqueue_script('jquery-core', get_template_directory_uri() . '/js/bootstrap.min.js');
     wp_enqueue_script('jquery-big', get_template_directory_uri() . '/js/bootstrap.js');
    
     
   

}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

if (function_exists('add_image_size')) {
    add_image_size('featured', 800, 400, true);
    add_image_size('post-thumb', 700, 400, true);    add_image_size('next', 50, 50, true);       add_image_size('down', 200, 200, true);


}
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow">..Leer Mas...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
function shorten_title($x) {
$title = get_the_title();
$attach="..";
 
if(strlen($title) <= $x) {
echo $title;
} else {
$title = substr($title, 0, $x) . $attach;
echo $title;
}
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_action('wp_enqueue_scripts', 'plusplus_scripts');
    ?>