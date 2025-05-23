<?php
/**
 * Custom Search Form
 *
 * @package Acme Themes
 * @subpackage Construction Field
 */
$construction_field_customizer_all_values = construction_field_get_theme_options();
?>
<div class="search-block">
	<form action="<?php echo esc_url( home_url() ); ?>" class="searchform" id="searchform" method="get" role="search">
		<div>
			<label for="menu-search" class="screen-reader-text"></label>
			<?php
			$placeholder_text = '';
			if ( isset( $construction_field_customizer_all_values['construction-field-search-placeholder'] ) ) :
				$placeholder_text = ' placeholder="' . esc_attr( $construction_field_customizer_all_values['construction-field-search-placeholder'] ) . '" ';
			endif;
			?>
			<input type="text" <?php echo $placeholder_text; ?> class="menu-search" id="menu-search" name="s" value="<?php echo get_search_query(); ?>" />
			<button class="searchsubmit fa fa-search" type="submit" id="searchsubmit"></button>
		</div>
	</form>
</div>
