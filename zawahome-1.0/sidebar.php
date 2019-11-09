<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zawaHome
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
		<div class="sidebar_wrapper" style="border: 1px solid #ddd; width: 100%">
			<aside id="secondary" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside><!-- #secondary -->
		</div>