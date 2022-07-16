<?php
// ++++++++++++++++++ 投稿タイプのエディターを非表示にする +++++++++++++++++
add_action('init', function () {
    remove_post_type_support('post', 'editor');
    // 追加可能
    remove_post_type_support( 'estate', 'editor' );
}, 99);
