# WPQ Post CSV Exporter

WPQ Post CSV Exporter is a lightweight WordPress plugin that allows you to export published posts—or any public post type—in CSV format. The exported CSV file contains detailed information, including the post's created date, author, title, URL, and thumbnail URL. This makes it easy to manage, review, or migrate your content.

## Features

- **Multi Post Type Support:**  
  Export any public post type, including posts, pages, or custom post types.

- **Detailed CSV Output:**  
  The CSV columns are ordered as follows:
  - **Created Date**
  - **Author**
  - **Title**
  - **URL**
  - **Thumbnail URL** (if available)

- **User-Friendly Interface:**  
  An admin page is added under **Tools** where you can choose the post type and export your data with a single click.

- **Excel and Google Sheets Compatible:**  
  Includes a UTF-8 BOM to ensure the CSV file is properly recognized in Excel and Google Sheets.

## Installation

1. **Download:**  
   Clone or download the repository from [GitHub](https://github.com/cornQ/wpq-post-csv-exporter).

2. **Upload:**  
   Upload the `wpq-post-csv-exporter.php` file to the `/wp-content/plugins/` directory of your WordPress installation.

3. **Activate:**  
   Activate the plugin through the **Plugins** menu in WordPress.

4. **Export:**  
   Navigate to **Tools > Export Posts CSV** in your WordPress admin dashboard. Select the desired post type from the dropdown menu and click the **Export CSV** button to download your CSV file.

## Usage

- **Export All Posts or Specific Post Types:**  
  Use the dropdown menu on the export page to choose which public post type you wish to export.

- **CSV Content:**  
  The generated CSV file includes the following columns in order:
  
  1. **Created Date** (formatted as `YYYY-MM-DD HH:MM:SS`)
  2. **Author** (display name)
  3. **Title**
  4. **URL** (permalink)
  5. **Thumbnail URL** (if the post has a featured image)

Simply select your options and click the export button—the file will download automatically.

## License

This plugin is released under the **GNU General Public License v3.0 or later**. For more details, see [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html).
