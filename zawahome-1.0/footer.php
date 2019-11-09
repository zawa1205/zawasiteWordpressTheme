<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zawaHome
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container footer_wrapper">
			<a href="#"><h2>TOP</h2></a>
			<div class="center_contents">
				<a href= "<?php echo get_page_link( 3 );?>"><p>利用規約</p></a>
				<a href= "<?php echo get_page_link( 47 );?>"><p>お問い合わせ</p></a>
			</div>
			<small>©︎zawasite.com</small>
		</div>

	</footer><!-- #colophon -->
</div>

<?php wp_footer(); ?>

</body>
</html>