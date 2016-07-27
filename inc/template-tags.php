<?php

if ( ! function_exists( 'ot_the_custom_logo' ) ) :
    /**
     * Displays the optional custom logo.
     * Does nothing if the custom logo is not available.
     */
    function ot_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    }
endif;


if ( ! function_exists( 'ot_the_truncated_content' ) ) :
    /**
     * Displays the truncated content.
     */
    function ot_the_truncated_content() {
        $content = get_the_content();
        $content = preg_replace("/<img[^>]+\>/i", " ", $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);

        echo $content;
    }
endif;