=== WPQ Post CSV Exporter ===
Contributors: sakib, cornQ
Donate link: https://example.com/
Tags: csv, export, posts, custom post types
Requires at least: 4.7
Tested up to: 6.7
Stable tag: 1.3
Requires PHP: 7.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Exports published posts (or any public post type) in CSV format including the created date, author, title, URL, and thumbnail URL.

== Description ==

WPQ Post CSV Exporter is a lightweight WordPress plugin that allows you to export published posts—and any public post type—to CSV format. The exported CSV file includes detailed information such as the created date, author, title, URL, and thumbnail URL. This tool is ideal for content migration, data analysis, and backups.

== Frequently Asked Questions ==

= How do I export my posts? =

After activating the plugin, navigate to **Tools > Export Posts CSV**, select your desired post type from the dropdown menu, and click the **Export CSV** button.

= Does the plugin support custom post types? =

Yes, the plugin supports any public post type, including custom post types.

== Screenshots ==

1. **WP Admin Dashboard** – This screenshot shows the plugin settings page in the WordPress admin dashboard. (assets/wpadmin-dashboard.png)
2. **Exported CSV** – This screenshot displays an example of an exported CSV file opened in a spreadsheet application. (assets/exported-csv.png)

== Changelog ==

= 1.3 =
* Initial stable release.

== Features ==

* Easy to use.
* Supports multiple post types.
* Compatible with spreadsheet software.

== Manual Installation ==

1. **Download:**  
   Download the plugin package from the repository.

2. **Upload:**  
   Upload the `wpq-post-csv-exporter.php` file into the `/wp-content/plugins/` directory of your WordPress installation.

3. **Activate:**  
   Activate the plugin via the **Plugins** menu in WordPress.

4. **Export:**  
   Navigate to **Tools > Export Posts CSV** in your WordPress admin dashboard, select the desired post type, and click the **Export CSV** button.

== Usage ==

On the export page, select a public post type from the dropdown. The generated CSV file contains the following columns in order:

* **Created Date** (formatted as `YYYY-MM-DD HH:MM:SS`)
* **Author** (display name)
* **Title**
* **URL** (permalink)
* **Thumbnail URL** (if available)

== License ==

This plugin is released under the GNU General Public License v3.0 or later. For more details, see [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html).
