<?php

/** Template Name: 会社情報
 */
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix=”og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#”>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="X-UA-Compatible" content="ie=edge" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- FontAwesome -->

  <?php wp_head() ?>

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" /> -->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">

  <!--クローラー -->
  <meta name="robots" content="noindex">
</head>

<body>
 


  <!-- 会社概要フェードイン -->
  <section class="p-about-vision l-container">
    <div class="c-section-title">
      <h2 class="c-section-title__top">経営理念</h2>
      <h3 class="c-section-title__bottom">Philosophy</h3>
    </div>
    <!-- <div class="p-about-vision__title">経営理念</div> -->
    <div class="p-about-vision__text">
      快適で安全安心な住環境をすべての入居者の皆様に将来にわたって心地良い住まいを提供してまいります。
    </div>
    <div class="p-about-vision__copy">
      <p class="fadein txt txt01">１．自然と調和した住環境の提供・整備</p>
      <p class="fadein txt txt02">２．安全安心な暮らしの提供</p>
      <p class="fadein txt txt03">３．幸福度の追求</p>
    </div>
    <div class="p-about-vision__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/profile/ceo.jpg" alt="">
    </div>
  </section>

  <section class="l-container">
    <div class="c-section-title">
      <h2 class="c-section-title__top">メッセージ</h2>
      <h3 class="c-section-title__bottom">Message</h3>
    </div>
    <p class="p-about-msg">
      上州空っ風のなか農家で育ちました。<br>
      <br>
      地元での物件探しはお任せください。<br>
      資産活用・相続相談、賃貸住宅建設、管財業務に従事し、現在は家業の不動産業務に専念。<br>
      相続・事業承継に成年後見・家族信託の手法によりアドバイスを行います。<br>
      <br>
      私達はお客様との出会いを何より大切にしています。まずはお気軽にご相談ください。
    </p>

    <div class="p-about-prof">
      <div class="p-about-prof__detail c-table-underbar">
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">代表者</div>
          <div class="c-table-underbar__body">舩津　晴生</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">
            経歴
          </div>
          <div class="c-table-underbar__body">
            群馬県前橋市出身<br>
            上智大学法学部卒
          </div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">保有資格
          </div>
          <div class="c-table-underbar__body">
            行政書士<br>
            福祉住環境コーディネーター<br>
            損害保険募集人<br>
            土壌診断技術者<br>
            県農薬管理指導士<br>
            宅地建物取引士<br>
            賃貸不動産経営管理士 <br>
          </div>
        </div>
      </div>
      <div class="p-about-prof__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/profile/ceo-2.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="l-container-narrow">
    <div class="c-section-title">
      <h2 class="c-section-title__top">会社概要</h2>
      <h3 class="c-section-title__bottom">Outline</h3>
    </div>

    <div class="p-about-company">
      <div class="p-about-company__detail c-table-underbar">
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">会社名</div>
          <div class="c-table-underbar__body">文京ホームズ合同会社(略称文京ホームズＬＬＣ)</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">住所</div>
          <div class="c-table-underbar__body">群馬県前橋市天川原町１－４０－６</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">住所</div>
          <div class="c-table-underbar__body">群馬県前橋市天川原町１－４０－６</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">営業時間</div>
          <div class="c-table-underbar__body">１０:００～１８:００(定休日:水曜日 土日祝祭日:不定休)</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">TEL</div>
          <div class="c-table-underbar__body">０２７－２１５－２１０３</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">FAX</div>
          <div class="c-table-underbar__body">０２７－２１５－２１０４</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">携帯電話</div>
          <div class="c-table-underbar__body">０９０－５４９８－９２２５ 担当:舩津(フナツ)</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">MAIL</div>
          <div class="c-table-underbar__body">
            <script type="text/javascript">

              function converter(M) {
                var str = "",
                  str_as = "";
                for (var i = 0; i < M.length; i++) {
                  str_as = M.charCodeAt(i);
                  str += String.fromCharCode(str_as + 1);
                }
                return str;
              }
              var ad = converter(String.fromCharCode(101, 116, 106, 106, 116, 109, 63, 105, 98, 110) + String.fromCharCode(108, 45, 103, 110, 108, 100, 45, 109, 100, 45, 105, 111));
              document.write(ad);
       
            </script>
            <noscript>Javascriptを有効にしてください</noscript>

          </div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">事業内容</div>
          <div class="c-table-underbar__body">不動産・法務コンサルティング、不動産賃貸管理・売買仲介・空家管理、損害保険代理店</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">免許番号</div>
          <div class="c-table-underbar__body">群馬県知事免許（２）第７３４８号</div>
        </div>
        <div class="c-table-underbar__row">
          <div class="c-table-underbar__title">加盟</div>
          <div class="c-table-underbar__body">一般社団法人　群馬県宅地建物取引業協会　会員
            公益社団法人　全国宅地建物取引保証協会　会員</div>
        </div>

  </section>


  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-inview@1.1.2/jquery.inview.min.js"></script>

</body>

</html>