<?php
/**
 * Single docs content articles template
 *
 * This template can be overridden by copying it to yourtheme/docspress/single/content-articles.php.
 *
 * @author  nK
 * @package @@plugin_name/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Show child articles.
// phpcs:ignore
$children = wp_list_pages( 'title_li=&order=menu_order&child_of=' . get_the_ID() . '&echo=0&post_type=' . get_post_type() );

if ( $children ) {
    ?>
    <div class="docspress-single-articles">
        <ul>
            <?php
            // phpcs:ignore
            echo $children;
            ?>
        </ul>
    </div>
    <?php
}
