<?php 
get_header(); ?>

<main class="main front_page">
  <div class="img_area">
    <img src="<?php echo get_stylesheet_directory_uri()?>/img/top-image.jpg">
    <p>Zawa is an university student.<br>He always wanted to be an engineer.<p>
    <div class="btn_wrapper">  
      <a href= "<?php echo get_page_link( 45 );?>" class="img_area_btn">Zawa's profile</a>
    </div>
  </div>
  
  <!-- ブログ記事表示部分 -->
  <h2 class="section_title">− BLOG −</h2>
  <div class="container">
    <section class="archive">
      <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => '6',
          'orderby'        => 'date',
          'order'          => 'DESC',
        );
        $the_query = new WP_Query($args);
      ?>
        
      <div class="row news_wrapper">
      <?php if($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>    
        <a href="<?php the_permalink(); ?>">
        <!-- 記事タイル部分 -->
          <div class="col-lg-4 col-md-6 col-xm-12 news_content">
              <article class="post">
                <div class="thumnail_area">
                  <?php if( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail('large'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img"/>
                  <?php endif; ?>
                </div>
                <div class="smalls">
                  <span style="float: left; margin-right: 0.5em;"><?php echo get_the_date("Y年n月j日"); ?></span>
                  <span style="float: left;"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                </div>
                <!-- <span><?php the_tags(); ?></span> -->
                <h1>
                  <a class="d-none d-lg-inline" href="<?php the_permalink(); ?>">
                  <?php if(mb_strlen($post->post_title)>17) {
                    $title= mb_substr($post->post_title,0,17) ;
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  } ?>
                </a>
                <a class="d-none d-md-inline d-lg-none" href="<?php the_permalink(); ?>">
                <?php if(mb_strlen($post->post_title)>23) {
                  $title= mb_substr($post->post_title,0,23) ;
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                } ?>
              </a>
              <a class="d-inline d-md-none" href="<?php the_permalink(); ?>">
              <?php if(mb_strlen($post->post_title)>23) {
                $title= mb_substr($post->post_title,0,23) ;
                echo $title . '...';
              } else {
                echo $post->post_title;
              } ?>
            </a>
              </h1>
                <!-- <?php remove_filter ('the_excerpt', 'wpautop'); //Pタグ削除?>
                <?php the_excerpt(); ?> -->
              </article>
          </div>
        </a>
        <?php wp_reset_postdata(); ?>
        <?php endwhile; else : ?>
      </div>
      
      <article class="post">
        <p>まだ記事がありません。</p>
      </article>
      <?php endif; ?>
    </section>
    <div class="readmore">
      <a href= "<?php echo get_page_link( 50 );?>">read more</a>
    </div>
    <h2 class="section_title">− WORK −</h2>
    <div class="row work_wrapper">
      
        <?php 
        $parentId = 43;
        $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
        query_posts($args);
        if (have_posts()) : 
          $count = 1;
          while (have_posts()) : 
            the_post();
            if ( ( $count % 2 ) > 0 ) {
              $layout	= 'odd';
            } else {
              $layout	= 'even';
            } ?>
          <div class="col-md-6 col-xs-12 work_content">
            <div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
            <!-- <div class="title">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <h1> -->
                  <!-- <?php if(mb_strlen($post->post_title, 'UTF-8')>32){
                    $title= mb_substr($post->post_title, 0, 32, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  } ?> -->
                <!-- </h1>
              </a>
            </div> -->
          </div>
          <?php
          $count++;
        endwhile;
      endif;
      wp_reset_query();
      ?>
    </div>
    <div class="readmore">
      <a href= "<?php echo get_page_link( 43 );?>">read more</a>
    </div>
  </div>
</main>

<?php get_footer(); ?>