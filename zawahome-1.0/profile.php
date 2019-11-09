<?php
/*
Template Name: PROFILE
*/

get_header();
?>
<div class="container profile_wrapper">
  <div class="row">
    <div class="col-12 profile">
      <h2>-Profile-<h2>
      <img class="profile_img" src="<?php echo get_stylesheet_directory_uri()?>/img/profile_penguin.jpg">
      <h3 style="margin-bottom: 30px; font-size: 40px;">Zawa</h3>
      
       <h3>大学</h3>
       <p>某国公立大学（現在学部3年）</p>
       
       <h3>触れたことのある言語</h3>
       <p>HTML、CSS(Sass)、Javascript(Vue)、PHP、C、Java、Python 等</p>
       
       <h3>所有資格</h3>
       <p>Webデザイン技能士</p>
       
       <h3>実績</h3>
       <p>TDK主催のハッカソンにて入賞(2019年)</p>
       
       <h3>その他</h3>
       <p>
         プログラミング歴は3年ほどですが、パソコンは小学生頃からいじるくらいには好きでした。
         <br>現在はアルバイトでもプログラミングを使用して、Wordpressのテーマ作成等フロント気味のことをしています。
       </p>
    </div>
  </div>
</div>
<?php get_footer();