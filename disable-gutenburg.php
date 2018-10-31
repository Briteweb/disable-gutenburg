<?php

if (function_exists('add_filter')) {
    /* Disable Gutenburg for built-in post-types */
    add_filter('use_block_editor_for_post', '__return_false');
    /* Disable Gutenburg for custom post types */
    add_filter('use_block_editor_for_post_type', '__return_false');
}
