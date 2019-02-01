<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pencil
 */

if ( ! is_active_sidebar( 'top-1' ) ) {
	return;
}
?>

<div id="top-widget" class="top-widget widget-area col-md-12" role="complementary">
	<?php dynamic_sidebar( 'top-1' ); ?>
</div><!-- #secondary -->
