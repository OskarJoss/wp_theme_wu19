<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Hide admin bar on the front end
// add_filter('show_admin_bar', '__return_false');

// Changing excerpt length
function new_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

wp_enqueue_style('style', get_stylesheet_uri());
