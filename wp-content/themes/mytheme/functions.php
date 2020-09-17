<?php

function mytheme_setup() {
  // (C) のCSSを有効化
  add_theme_support("wp-block-styles");
  add_theme_support("title-tag");
  add_theme_support("responsive-embeds");
  add_theme_support("editor-styles");
  add_editor_style("editor-style.css");
}
add_action("after_setup_theme", "mytheme_setup");


//縦横比を維持したレスポンシブを有効化


function mytheme_enqueue() {
  wp_enqueue_style(
    "mytheme-style",
    get_stylesheet_uri(),
    array(),
    filemtime(get_thme_file_path("style.css"))
  );
  add_action("wp_enqueue_scripts","mytheme_enqueue")

//(D) テーマのCSSを読み込み
wp_enqueue_style(
  "mytheme_style",
  get_stylesheet_uri()
);
