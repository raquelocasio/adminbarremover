<?php

/**
 * Plugin Name:       Admin Bar Remover
 * Plugin URI:        https://github.com/raquelocasio/adminbarremover
 * Description:       Hides the admin bar from the front-end of the website.
 * Version:           1.0
 * Author:            Raquel Ocasio
 * Author URI:        https://raquelocasio.com/ * 
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       admin-bar-remover
 */

// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );