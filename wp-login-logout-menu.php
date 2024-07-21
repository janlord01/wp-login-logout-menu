<?php
/*
Plugin Name: WP Login Logout Menu
Description: Adds a login/logout menu item that changes based on the user's login status.
Version: 1.0
Author: Janlord Luga
Author URI: https://janlordluga.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Register custom menu item type
add_filter('wp_setup_nav_menu_item', 'wp_login_logout_menu_item');
function wp_login_logout_menu_item($menu_item) {
    if ($menu_item->type === 'login_logout') {
        $menu_item->title = is_user_logged_in() ? 'Logout' : 'Login';
        $menu_item->url = is_user_logged_in() ? wp_logout_url() : wp_login_url();
    }
    return $menu_item;
}

// Add custom menu item type to the menu items meta box
add_action('admin_head-nav-menus.php', 'add_login_logout_menu_meta_box');
function add_login_logout_menu_meta_box() {
    add_meta_box('login_logout_menu_meta_box', 'Login/Logout Link', 'login_logout_menu_meta_box', 'nav-menus', 'side', 'default');
}

function login_logout_menu_meta_box() {
    global $nav_menu_selected_id;
    ?>
    <div id="posttype-login-logout" class="posttypediv">
        <div id="tabs-panel-login-logout" class="tabs-panel tabs-panel-active">
            <ul id="login-logout-checklist" class="categorychecklist form-no-clear">
                <li>
                    <label class="menu-item-title">
                        <input type="checkbox" class="menu-item-checkbox" name="menu-item[-1][menu-item-object-id]" value="-1"> Login/Logout
                    </label>
                    <input type="hidden" class="menu-item-type" name="menu-item[-1][menu-item-type]" value="login_logout">
                    <input type="hidden" class="menu-item-title" name="menu-item[-1][menu-item-title]" value="Login/Logout">
                    <input type="hidden" class="menu-item-url" name="menu-item[-1][menu-item-url]" value="#">
                </li>
            </ul>
        </div>
        <p class="button-controls">
            <span class="add-to-menu">
                <input type="submit" class="button-secondary submit-add-to-menu right" value="<?php esc_attr_e('Add to Menu'); ?>" name="add-post-type-menu-item" id="submit-posttype-login-logout">
                <span class="spinner"></span>
            </span>
        </p>
    </div>
    <?php
}

// Update menu item URL and title dynamically
add_filter('wp_nav_menu_objects', 'update_login_logout_menu_item');
function update_login_logout_menu_item($items) {
    foreach ($items as &$item) {
        if ($item->type === 'login_logout') {
            $item->title = is_user_logged_in() ? 'Logout' : 'Login';
            $item->url = is_user_logged_in() ? wp_logout_url() : wp_login_url();
        }
    }
    return $items;
}
?>
