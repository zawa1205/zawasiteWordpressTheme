<?php
/*
Template Name: CONTACT
*/
get_header(); ?>

<div class="contact_wrapper">
  <div class="container">
    <h2>CONTACT</h2>
    <div class="row">
      <div class="col-lg-6 col-xs-12">
        <div class="text_area">
          <h3>ご記入前にお読みください</h3>
          <ul>
            <li>基本的に質問や意見など、何を書いていただいて構いません。</li>
            <li>こちらよりWordPressのテーマ作成等の仕事依頼も受け付けております。</li>
            <li>また、テーマ作成等でわからなくて積んでいる…という場合もアドバイス等可能な限りしたいと思っています。</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-xs-12 contact_form">
        <?php echo do_shortcode('[contact-form-7 id="54" title="コンタクトフォーム 1"]'); ?>
      </div>
      
    </div>
  </div>
</div>

<?php
get_footer();