<?php
/**
 * Plugin Name: WPQ Post CSV Exporter
 * Plugin URI: https://github.com/cornQ/wpq-post-csv-exporter
 * Description: Exports published posts (or any public post type) in CSV format including the created date, author, title, URL, and thumbnail URL.
 * Version: 1.4
 * Author: Md. Sohanur Rahman Sakib
 * Author URI: https://sakibsti.me
 * License: GPLv3 
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 **/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Add submenu page under Tools.
 */
function wpqpceskb_add_admin_menu() {
    add_submenu_page(
        'tools.php',                    // Parent slug.
        'Export Posts CSV',             // Page title.
        'Export Posts CSV',             // Menu title.
        'manage_options',               // Capability required.
        'export-posts-csv',             // Menu slug.
        'wpqpceskb_export_page_callback'      // Callback function.
    );
}
add_action( 'admin_menu', 'wpqpceskb_add_admin_menu' );

/**
 * Display the export page form.
 */
function wpqpceskb_export_page_callback() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'wpq-post-csv-exporter' ) );
    }

    if ( isset( $_POST['wpqpceskb_export_posts'] ) && check_admin_referer( 'wpqpceskb_export_posts_action', 'wpqpceskb_export_nonce' ) ) {
        $post_type = isset( $_POST['wpqpceskb_export_post_type'] ) ? sanitize_text_field( wp_unslash( $_POST['wpqpceskb_export_post_type'] ) ) : 'post';
        wpqpceskb_export_csv( $post_type );
        exit;
    }

    // Retrieve all public post types.
    $post_types = get_post_types( array( 'public' => true ), 'objects' );
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Export Posts as CSV', 'wpq-post-csv-exporter' ); ?></h1>
        <form method="post">
            <?php wp_nonce_field( 'wpqpceskb_export_posts_action', 'wpqpceskb_export_nonce' ); ?>
            <p>
                <label for="wpqpceskb_export_post_type"><?php esc_html_e( 'Select Post Type:', 'wpq-post-csv-exporter' ); ?></label>
                <select id="wpqpceskb_export_post_type" name="wpqpceskb_export_post_type">
                    <?php foreach ( $post_types as $type ) : ?>
                        <option value="<?php echo esc_attr( $type->name ); ?>"><?php echo esc_html( $type->label ); ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <p><?php esc_html_e( 'Click the button below to export the selected post type as a CSV file. The CSV includes created date, author, title, URL, and thumbnail URL.', 'wpq-post-csv-exporter' ); ?></p>
            <input type="submit" name="wpqpceskb_export_posts" class="button button-primary" value="<?php esc_attr_e( 'Export CSV', 'wpq-post-csv-exporter' ); ?>">
        </form>
    </div>
    <?php
}

/**
 * Export posts to CSV format.
 *
 * @param string $post_type The post type to export. Defaults to 'post'.
 */
function wpqpceskb_export_csv( $post_type = 'post' ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( esc_html__( 'You do not have sufficient permissions to perform this action.', 'wpq-post-csv-exporter' ) );
    }

    // Clear any existing output buffer to prevent extra output.
    if ( ob_get_length() ) {
        ob_end_clean();
    }

    // Query posts for the selected post type.
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    $posts = get_posts( $args );

    // Set headers for CSV download.
    header( 'Content-Type: text/csv; charset=utf-8' );
    header( 'Content-Disposition: attachment; filename=' . $post_type . '-export.csv' );

    // Open output stream.
    $output = fopen( 'php://output', 'w' );

    // Write UTF-8 BOM for Excel compatibility.
    // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_operations_fputs
    fputs( $output, "\xEF\xBB\xBF" );

    // Write CSV header row in the desired order: Created Date, Author, Title, URL, Thumbnail URL.
    fputcsv( $output, array( 'Created Date', 'Author', 'Title', 'URL', 'Thumbnail URL' ) );

    // Loop through posts and write each row.
    foreach ( $posts as $post ) {
        $created_date = get_the_date( 'Y-m-d H:i:s', $post->ID );
        $author_name  = get_the_author_meta( 'display_name', $post->post_author );
        $post_title   = sanitize_text_field( $post->post_title );
        $post_url     = get_permalink( $post->ID );
        $thumbnail    = has_post_thumbnail( $post->ID ) ? esc_url( get_the_post_thumbnail_url( $post->ID, 'full' ) ) : '';

        // CSV row follows: Created Date, Author, Title, URL, Thumbnail URL.
        fputcsv( $output, array( $created_date, $author_name, $post_title, esc_url( $post_url ), $thumbnail ) );
    }

    // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_operations_fclose
    fclose( $output );
    exit;
}
