<!-- 投稿画面にアイキャッチ画像を適用する。 -->
<?php
add_action('init', function() {
    add_theme_support('post-thumbnails');
});