<?php

/**
 * Helper class for child theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme {
    
    /**
	 * Enqueues scripts and styles.
	 *
     * @return void
     */
    static public function enqueue_scripts()
    {
        wp_enqueue_style( CHILD_THEME_NAME, FL_CHILD_THEME_URL . '/style.css' , array(), '1.0.0', 'all' );
        wp_enqueue_style( 'dashicons' );
        // wp_dequeue_style( 'foundation-icons' );
        // wp_dequeue_style( 'font-awesome' );
        // Take out the default lightbox
        // wp_dequeue_script('jquery-magnificpopup');
        // wp_dequeue_style('jquery-magnificpopup');

    }
    
}