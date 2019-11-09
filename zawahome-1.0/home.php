<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zawaHome
 */
?>
<head>
    <script data-ad-client="ca-pub-6775345886458617" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<?php
get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<main>
					<div class="home_wrapper contents">
						<?php if(have_posts()): while(have_posts()):the_post();
						get_template_part('inc/loop-content');
							
						endwhile; endif; 
						if ( function_exists( 'pagination' ) ) :
    pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
endif; ?>

					</div>
				</main>
			</div>
			<div class="col-lg-4 col-md-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>