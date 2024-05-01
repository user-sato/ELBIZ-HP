<?php
// titleタグを出力する。
add_theme_support( "title-tag" );

// タイトルとフレーズの区切り文字を「-」から「|」に変える
add_filter( 'document_title_separator', 'my_docment_title_separator' );
function my_docment_title_separator($separater){
    $separater = '|';
    return $separater;
}

// アイキャッチ画像を設定する
add_theme_support( 'post-thumbnails' );
?>
