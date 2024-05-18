<!-- Footer -->
<footer class="bg-gray-800 text-white">
  <div class="container mx-auto px-6 py-4">
    <div class="flex flex-wrap justify-between items-center">
      <div class="w-full md:w-1/3 text-center md:text-left">
        <p class="text-sm">© 2024 ELEBIZ. All Rights Reserved.</p>
      </div>
      <div class="w-full md:w-1/3 text-center">
        <p class="text-sm">お問い合わせ：080-6760-4936</p>
        <!-- <p class="text-sm">お問い合わせフォーム</p> -->
      </div>
      <div class="w-full md:w-1/3 text-center md:text-right">
        <p class="text-sm">利用規約</p>
        <p class="text-sm">プライバシーポリシー</p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script>
$(function(){
  // #で始まるa要素をクリックした場合に処理（"#"←ダブルクォーテンションで囲むのを忘れずに。忘れるとjQueryのバージョンによっては動かない。。）
  $('a[href^="#"]').click(function(){
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    var adjust = 0;
    // スクロールの速度（ミリ秒）
    var speed = 400;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    var href= $(this).attr("href");
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    var position = target.offset().top + adjust;
    // スムーススクロール linear（等速） or swing（変速）
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});
</script>
</body>
</html>