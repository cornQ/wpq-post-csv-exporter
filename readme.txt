=== WPQ Post CSV Exporter ===
Contributors: sakibstime, cornq
Donate link: https://buymeacoffee.com/sakibstime
Tags: csv, export, posts, custom post types
Requires at least: 4.7
Tested up to: 6.7
Stable tag: 1.4
Requires PHP: 8.2
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Export your posts and custom post types into CSV format effortlessly, including the created date, author, title, URL, and featured image URL.

== Description ==

WPQ Post CSV Exporter is a lightweight WordPress plugin that enables you to export published posts—and any public post type—into a CSV file. It collects essential details such as the post's creation date, author, title, URL, and thumbnail URL. This tool is ideal for content migration, data analysis, or creating backups of your site's content.

== Frequently Asked Questions ==

= How do I export my posts? =

Once the plugin is activated, navigate to **Tools > Export Posts CSV** in your WordPress admin dashboard. Choose your desired post type from the dropdown menu and click the **Export CSV** button. The plugin will then generate a CSV file containing the selected posts.

= Does the plugin support custom post types? =

Yes, WPQ Post CSV Exporter supports all public post types, including custom post types. You can export any type of content registered as public.

== Screenshots ==

1. **WP Admin Dashboard** – This screenshot displays the plugin’s export interface within the WordPress admin dashboard. (assets/wpadmin-dashboard.png)
2. **Exported CSV** – This screenshot shows an example CSV file opened in a spreadsheet application. (assets/exported-csv.png)

== Changelog ==

= 1.3 =
* Initial Release

= 1.4 =
* Fixing function related issue

== Upgrade Notice ==
N/A

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

On the export page, select the desired public post type from the dropdown menu. The generated CSV file will include the following columns in order:
* **Created Date** – The date and time when the post was published (formatted as `YYYY-MM-DD HH:MM:SS`).
* **Author** – The display name of the post author.
* **Title** – The title of the post.
* **URL** – The permalink of the post.
* **Thumbnail URL** – The URL of the post's featured image (if available).

== License ==

This plugin is released under the GNU General Public License v3.0 or later. For more details, see [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html).
