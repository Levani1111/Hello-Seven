<?php

// Redirect function for ip address starting with 77.29
function redirect_if_ip_starts_with_77_29() {
    if (strpos($_SERVER['REMOTE_ADDR'], '77.29') === 0) {
        wp_redirect('https://www.google.com/');
        exit;
    }
}
add_action('init', 'redirect_if_ip_starts_with_77_29');
