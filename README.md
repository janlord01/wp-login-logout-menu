# WP Login Logout Menu

**WP Login Logout Menu** is a WordPress plugin that adds a login/logout menu item to your navigation menu. The menu item dynamically changes based on the user's login status. When the user is logged in, it shows a "Logout" link; when the user is logged out, it shows a "Login" link.

## Features

- Dynamically displays login/logout links based on user status.
- Adds a custom menu item type to the WordPress menu editor.
- Allows users to manually add the login/logout menu item to any menu.

## Installation

1. **Download the Plugin:**
   - Download the `wp-login-logout-menu.zip` file from the plugin repository or your source.

2. **Upload the Plugin:**
   - Go to the WordPress admin dashboard.
   - Navigate to `Plugins > Add New`.
   - Click on `Upload Plugin` and choose the `wp-login-logout-menu.zip` file.
   - Click `Install Now` and then activate the plugin.

3. **Manual Installation:**
   - Upload the `wp-login-logout-menu` folder to the `/wp-content/plugins/` directory.
   - Activate the plugin through the `Plugins` menu in WordPress.

## Usage

1. **Add Login/Logout Menu Item:**
   - Go to `Appearance > Menus` in the WordPress admin dashboard.
   - In the left-hand column, find the meta box labeled `Login/Logout Link`.
   - Check the `Login/Logout` item and click `Add to Menu`.
   - Drag the new item to your desired location in the menu and save the menu.

2. **Menu Item Display:**
   - The menu item will dynamically change to "Login" or "Logout" based on the user's login status.

## Frequently Asked Questions (FAQ)

### Q: How do I change the menu item labels?

A: The menu item labels are set to "Login" and "Logout" by default. To change these labels, you can edit the plugin code in the `wp_login_logout_menu_item` and `update_login_logout_menu_item` functions.

### Q: Can I use this plugin with any theme?

A: Yes, this plugin is designed to work with any WordPress theme that supports custom menus.

### Q: Does this plugin support multiple menus?

A: Yes, you can add the login/logout menu item to any menu location defined by your theme.

## Changelog

### 1.0
- Initial release with dynamic login/logout menu item functionality.

## Author

**Janlord Luga**  
[https://janlordluga.com/](https://janlordluga.com/)

## License

This plugin is licensed under the [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).
