<?php

?>
<article <?php post_class( 'article-list' ); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="img-wrap">
    <?php if( has_post_thumbnail() ):
      the_post_thumbnail('large');

    endif;
    if (!is_category() && has_category()): ?>
      <span class="cat-data">
      <?php
        $postcat = get_the_category();
        echo $postcat[0]->name;
      ?>
      </span>
    <?php endif; ?>
    </div><!--end img-warp-->
    <div class="text">
      <!--タイトル-->
      <h2 class="d-none d-lg-inline">
        <?php if(mb_strlen($post->post_title)>25) {
          $title= mb_substr($post->post_title,0,25);
          echo $title . '...';
        } else {
          echo $post->post_title;
        } ?>
      </h2>
      <h2 class="d-none d-md-inline d-lg-none">
        <?php if(mb_strlen($post->post_title)>30) {
          $title= mb_substr($post->post_title,0,30);
          echo $title . '...';
        } else {
          echo $post->post_title;
        } ?>
      </h2>
      <h2 class="d-inline d-md-none">
        <?php if(mb_strlen($post->post_title)>27) {
          $title= mb_substr($post->post_title,0,27);
          echo $title . '...';
        } else {
          echo $post->post_title;
        } ?>
      </h2>
      <div>
        <!--投稿日を表示-->
        <span class="article-date">
          <i class="far fa-clock"></i>
          <time datetime="<?php echo get_the_date("Y年n月j日"); ?>">
            <?php echo get_the_date("Y年n月j日"); ?>
          </time>
        </span>
        <!--著者を表示-->
        <span class="article-author">
          <i class="fas fa-user"></i><?php the_author(); ?>
        </span>
      </div>
      <?php the_excerpt(); ?>
    </div><!--end text-->
  </a>
</article>
<?php

?>