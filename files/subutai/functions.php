<?php
function subutai_enqueue_styles() {
   wp_enqueue_style( 'twentyseventeen', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'subutai_enqueue_styles' ); 

function my_custom_header_args( $args ) {
  $args['default-image'] = get_theme_file_uri( '/assets/images/header.jpg' );
  return $args;
}
add_filter( 'twentyseventeen_custom_header_args', 'my_custom_header_args' );
?>

