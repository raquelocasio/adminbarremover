<?php

/**
 * Plugin Name:       Admin Bar Remover
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Hides the admin bar from the front-end of the website.
 * Version:           1.0
 * Author:            Raquel Ocasio
 * Author URI:        https://raquelocasio.com/
 * Text Domain:       admin-bar-remover
 */

// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );