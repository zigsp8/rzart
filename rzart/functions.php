<?php
	/* functions for RZArt Template*/



	register_sidebar( array(
	   'name'          =>  'Footer Widget',
	   'id'            =>  'footer-widget',
	   'before_widget' =>  '<div class="footer-widget">',
	   'after_widget'  => '</div>'
	) );

/**
 * Enqueue the parent theme stylesheet.
 */

function snapshot_child_enqueue_parent_style() {
    wp_enqueue_style( 'snapshot-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'snapshot_child_enqueue_parent_style', 8 );

?>
