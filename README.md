# WPQ Post CSV Exporter

**Contributors:** sakib, cornQ  
**Tags:** csv, export, posts, custom post types, WordPress  
**Requires at least:** 4.0  
**Tested up to:** 6.2  
**Stable tag:** 1.3  
**License:** GPLv3 or later  
**License URI:** [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html)

## Short Description
Export posts and custom post types to CSV with created date, author, title, URL, and thumbnail.

## Description
WPQ Post CSV Exporter is a lightweight WordPress plugin that lets you export published posts—or any public post type—in CSV format. The exported CSV file contains detailed information including created date, author, title, URL, and thumbnail URL. This plugin is useful for managing, reviewing, or migrating content.

## Installation
1. **Download:** Clone or download the repository from [GitHub](https://github.com/cornQ/wpq-post-csv-exporter).
2. **Upload:** Place the `wpq-post-csv-exporter.php` file into the `/wp-content/plugins/` directory.
3. **Activate:** Activate the plugin via the **Plugins** menu in WordPress.
4. **Export:** Navigate to **Tools > Export Posts CSV** in your WordPress admin dashboard, select the desired post type, and click the **Export CSV** button.

## Usage
On the export page you can select a public post type from a dropdown. Once you click the export button, a CSV file is generated that contains the following columns (in order):
- **Created Date** (formatted as `YYYY-MM-DD HH:MM:SS`)
- **Author** (display name)
- **Title**
- **URL** (permalink)
- **Thumbnail URL** (if available)

## Changelog
### 1.3
- Initial release.

## License
This plugin is released under the GNU General Public License v3.0 or later. For more details, see [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html).
