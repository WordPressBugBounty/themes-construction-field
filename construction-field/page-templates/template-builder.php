<?php
/**
 * Template Name: AT Builder Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Acme Themes
 * @subpackage Construction Field
 */
get_header();
$construction_field_customizer_all_values = construction_field_get_theme_options();

while ( have_posts() ) :
	the_post();

	the_content();

endwhile; // End of the loop.

get_footer();
