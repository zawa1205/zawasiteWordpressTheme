<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div id="primary" class="content-area col-12">
			<main id="main" class="site-main">
			
				<?php if(have_posts()): the_post(); ?>
				<article <?php post_class( 'article-content' ); ?>>
				<!--タイトル-->
				<h1 style="text-align: center;"><?php the_title(); ?></h1>
				<!-- アイキャッチ画像 -->
				<div class="article-img">
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<?php the_content(); ?>
				<div class="article-tag">
				<?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
				); ?>
				</div>
				</article>
				<?php endif; ?>
		
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php get_footer();