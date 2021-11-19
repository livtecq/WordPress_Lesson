<?php wp_body_open(); ?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <!-- ホームに戻るURLに/の使用は極力避ける。home_urlを使用する。 -->
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <!-- グローバルメニューの作成 -->
      <?php
      // メニューIDを取得する。
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      $menu_items = wp_get_nav_menu_items($menu->term_id);

      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php foreach ($menu_items as $item): ?>
          <li class="nav-item">
            <!-- 画面表示のときはエスケープ処理しよう。 -->
            <a class="nav-link" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>