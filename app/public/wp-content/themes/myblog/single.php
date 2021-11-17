<!DOCTYPE html>
<html lang="en">

<head>

  <?php get_header(); ?>

</head>

<body>

  <!-- Navigation -->
  <!-- ヘッダーやフッター以外のパーツ化 -->
  <?php get_template_part('includes/header'); ?>

  <!-- ループ処理の際はあまり起こり得ないエラーであっても下記を記述しておく。 -->
  <?php if (have_posts()): ?>
  <!-- 投稿の詳細ページに各情報を出力する。 -->
  <?php while (have_posts()) : the_post(); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php the_title(); ?></h1>
              <span class="meta">Posted by
                <?php the_author(); ?>
                on <?php the_date(); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- 投稿の詳細ページに各情報を出力する。の閉じタグ -->
  <?php endwhile; ?>
  
  <!-- WordPressでは404エラー処理があるため、else処理はバグ回避のため記述しない。 -->
  <!-- <?php else: ?>
    <p>記事が見つかりませんでした。</p> -->
  
  <?php endif; ?>

  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>