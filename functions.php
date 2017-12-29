<?php
// Remove all default WP template redirects/lookups
remove_action('template_redirect', 'redirect_canonical');

// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
    add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
}
add_action('init', 'remove_redirects');

// Load scripts
function load_vue_scripts() {
    wp_enqueue_style('blank/app.css', get_template_directory_uri() . '/vue-app/dist/static/css/app.css', false, null);
    wp_enqueue_script('blank/manifest.js', get_template_directory_uri() . '/vue-app/dist/static/js/manifest.js', null, null, true);
    wp_enqueue_script('blank/vendor.js', get_template_directory_uri() . '/vue-app/dist/static/js/vendor.js', null, null, true);
    wp_enqueue_script('blank/app.js', get_template_directory_uri() . '/vue-app/dist/static/js/app.js', null, null, true);
}
add_action('wp_enqueue_scripts', 'load_vue_scripts', 100);
