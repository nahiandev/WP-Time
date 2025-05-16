<?php
/*
Plugin Name: WP Time
Description: Shows current WordPress and server time in admin notices.
Version: 1.0
Author: Ibne Nahian (@nahiandev)
Author URI: https://www.linkedin.com/in/nahiandev/
Plugin URI: https://github.com/nahiandev/wp-time
*/


function display_admin_time() {
    echo '<div class="notice notice-info"><p>WordPress Current Time: <strong>' . current_time('mysql') . '</strong> (Server Time: ' . date('Y-m-d H:i:s') . ')</p></div>';
}
add_action('admin_notices', 'display_admin_time');
