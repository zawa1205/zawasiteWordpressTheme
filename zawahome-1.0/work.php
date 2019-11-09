<?php
/*
Template Name: WORK
*/

get_header(); ?>
<div class="work_wrapper">
  <div class="container">
    <h2><span>-WORK-</span>　過去の制作物一覧</span></h2>
          <?php
          if ( have_posts() ) :
           while ( have_posts() ) : the_post();
           $args = array(
           'post_parent' => get_the_ID(),
           'post_status' => 'publish',
           'post_type'   => 'page'
           );
           $children_array = get_children( $args );
           
           if ( count( $children_array ) > 0 ) {
           echo '<div class="row">';
           foreach ( $children_array as $child ) {
           $url = get_permalink( $child->ID );
           
           $html  = '<div class="col-md-6 col-xs-12 work_content">';
           $html .= '<a href="' . esc_url( $url ) . '">';
           if ( has_post_thumbnail($child->ID) ) {
             $html .= get_the_post_thumbnail($child->ID, 'large');
           }
           $html .= '<div class="col-12 work_title">';
           $html .= '<h3>';
           if(mb_strlen($child->post_title)>30) {
             $title= mb_substr($child->post_title,0,30);
             $html .= $title . '...';
           } else {
             $html .= $child->post_title;
           }
           $html .= '</h3>';
           $html .= '</div>';
           $html .= '</a>';
           $html .= '</div>';
           
           echo $html;
           }
           echo '</div>';
           }
           endwhile;
         endif; ?>
  </div>
</div>
<?php get_footer();