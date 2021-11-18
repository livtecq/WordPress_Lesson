<!DOCTYPE html>
<!-- WordPressではLanguage設定は下記を記述する。 -->
<html <?php language_attributes(); ?>>

<head>

<?php get_header(); ?>


</head>

<!-- 必須ではないが入れておいたほうがいいテンプレートタグ -->
<body <?php body_class(); ?>>

<body>

  <!-- Navigation -->
  <!-- ヘッダーやフッター以外のパーツ化 -->
  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

  <!-- Page Header -->

  <!-- バックグラウンドイメージの中アイキャッチ画像を挿入する。 -->
  <!-- var_dumpで変数の中身を画面に表示して確認する -->
  <!-- もしアイキャッチ画像が設定されていなければifでデフォルト画像を設定する。 -->
  <?php
    $img = get_eyecatch_with_default();
  ?>
  <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <hr>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>
