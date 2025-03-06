# WPQ Post CSV Exporter

**Contributors:** sakib, cornQ  
**Tags:** csv, export, posts, custom post types  
**Requires at least:** 4.0  
**Tested up to:** 6.7  
**Stable tag:** 1.3  
**License:** GPLv3 or later
**License URI:** [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html)  

Exports published posts (or any public post type) in CSV format including the created date, author, title, URL, and thumbnail URL.

## Description

WPQ Post CSV Exporter is a lightweight WordPress plugin that lets you export published posts—or any public post type—in CSV format. The generated CSV file includes details such as created date, author, title, URL, and thumbnail URL, making it easy to manage, review, or migrate your content.

## Installation

1. **Download:** Clone or download the repository from [GitHub](https://github.com/cornQ/wpq-post-csv-exporter).
2. **Upload:** Place the `wpq-post-csv-exporter.php` file into the `/wp-content/plugins/` directory of your WordPress installation.
3. **Activate:** Activate the plugin via the **Plugins** menu in WordPress.
4. **Export:** Navigate to **Tools > Export Posts CSV** in your WordPress admin dashboard, select the desired post type, and click the **Export CSV** button.

## Usage

On the export page, select a public post type from the dropdown. The generated CSV file contains the following columns in order:

- **Created Date** (formatted as `YYYY-MM-DD HH:MM:SS`)
- **Author** (display name)
- **Title**
- **URL** (permalink)
- **Thumbnail URL** (if available)

## Screenshots 

1. **WP Admin Dashboard:**  
   This screenshot shows the plugin settings page in the WordPress admin dashboard.  
   ![WP Admin Dashboard](https://github.com/cornQ/wpq-post-csv-exporter/blob/main/assests/wpadmin-dashboard.png)

2. **Exported CSV:**  
   This screenshot displays an example of an exported CSV file opened in a spreadsheet application.  
   ![Exported CSV](https://github.com/cornQ/wpq-post-csv-exporter/blob/main/assests/exported-csv.png)


## Changelog

### 1.3
- Initial release.

## License

This plugin is released under the GNU General Public License v3.0 or later. For more details, see [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html).
