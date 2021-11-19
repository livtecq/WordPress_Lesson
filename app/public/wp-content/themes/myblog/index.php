<!DOCTYPE html>
<html lang="en">

<head>

<?php get_header(); ?>

</head>

<body>

  <!-- Navigation -->
  <!-- ヘッダーやフッター以外のパーツ化 -->
  <?php get_template_part('includes/header'); ?>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog<?php echo date('Y'); ?></h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle">
                  <?php the_excerpt(); ?>
                </h3>
              </a>
              <p class="post-meta">Posted by
                <?php the_author(); ?>
                <?php the_time(get_option('date_format')); ?></p>
              </p>
            </div>
            <hr>
          <?php endwhile; ?>
      <!-- Pager -->
      <div class="clearfix">
        <!-- ページネーションの実装 -->
      <!-- <a class="btn btn-primary float-left" href="#">&rarr; 新しい記事へ</a> -->
      <?php 
      $link = get_previous_posts_link('&rarr; 新しい記事へ');
      if($link):
        $link = str_replace('<a','<a class="btn btn-primary float-left"', $link);
        echo $link;
      endif;
      ?>
      <!-- <a class="btn btn-primary float-right" href="#">古い記事へ &rarr;</a> -->
      <?php 
      $link = get_next_posts_link('古い記事へ &rarr;');
      if($link) {
        $link = str_replace('<a','<a class="btn btn-primary float-right"', $link);
        echo $link;
      }
      ?>
      </div>
    <?php else : ?>
      <p>記事が見つかりませんでした</p>
    <?php endif; ?>
    </div>
  </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>