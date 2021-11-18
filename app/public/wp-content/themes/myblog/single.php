<!DOCTYPE html>

<!-- <html lang="ja"> -->
<!-- WordPressではLanguage設定は下記を記述する。 -->
<html <?php language_attributes(); ?>>


<head>

  <?php get_header(); ?>

</head>

<!-- 必須ではないが入れておいたほうがいいテンプレートタグ -->
<body <?php body_class(); ?>>

  <!-- WordPressバージョン5.2から新しく追加されたタグ。 -->
  <!-- 各ボディタグが開いた直後に書き加えることになるのでテンプレートに加えたほうが便利。 -->
  <!-- <?php wp_body_open(); ?> -->


  <!-- Navigation -->
  <!-- ヘッダーやフッター以外のパーツ化 -->
  <?php get_template_part('includes/header'); ?>


  <!-- 変数・配列・連想配列の学習 -->
  <?php
  // $num = 1; // 変数宣言
  // echo $num;
  // echo '<br>';
  // echo $num + 1;
  // echo '<br>';
  // echo $num + 2;
  // echo '<br>';
  // echo $num + 3;

  // 配列
  // $livtecq = []; // もう一つの書き方$livtecq = array();
  // $livtecq[1] = 'Yamada';
  // $livtecq[2] = 'Tanaka';
  // $livtecq[3] = 'Yosidoka';
  
  // echo $livtecq[2]; // 添字・インデックス

  // 連想配列
  // $items = [];
  // $items[0] = 'りんご';
  // $items[1] = 'もも';
  // $items[2] = 'バナナ';
  // $items[3] = 'グレープ';
  // $items['apple'] = 'りんご';
  // $items['peach'] = 'もも';
  // $items['banana'] = 'バナナ';
  // $items['grapes'] = 'グレープ';

  // echo $items['grapes']



  ?>

  <!-- ループ処理の際はあまり起こり得ないエラーであっても下記を記述しておく。 -->
  <?php if (have_posts()): ?>
  <!-- 投稿の詳細ページに各情報を出力する。 -->
  <?php while (have_posts()) : the_post(); ?>

    <!-- Page Header -->
    <!-- バックグラウンドイメージの中アイキャッチ画像を挿入する。 -->
    <!-- var_dumpで変数の中身を画面に表示して確認する -->
    <!-- もしアイキャッチ画像が設定されていなければifでデフォルト画像を設定する。 -->
    <?php
    if (has_post_thumbnail()):
      $id = get_post_thumbnail_id();
      $img = wp_get_attachment_image_src($id, 'large');
      var_dump($img);
    else:
      $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
    endif;
    ?>

    <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
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
            <!-- アイキャッチ画像を表示する -->
            <?php the_post_thumbnail(array(32, 32), array('alt' => 'アイキャッチ画像')); ?>
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