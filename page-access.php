<?php
// Template Name: アクセス
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

    <!-- タイトル -->
    <section class="p-access-map l-container">
        <div class="c-section-title">
            <h2 class="c-section-title__top">アクセス</h2>
            <h3 class="c-section-title__bottom">Access</h3>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12850.093444977465!2d139.0842572!3d36.3723225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29196d55625b0e4c!2z5paH5Lqs44Ob44O844Og44K6TExD!5e0!3m2!1sja!2sjp!4v1657368792514!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- アクセス案内 -->
    <section class="p-access-guide l-container">
        <div class="c-section-title">
            <h2 class="c-section-title__top">事務所のご案内</h2>
            <h3 class="c-section-title__bottom">Office</h3>
        </div>
        <div class="p-access-guide__in">
            <div class="p-access-guide__item">
                <figure class="p-access-guide__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/access/s-office.png" alt="駐車場の写真">
                </figure>
                <div class="p-access-guide__title">南方面からお越しのお客様。
                </div>
                <div class="p-access-guide__text">
                    ベイシアマート前橋六供店様を通り過ぎ、約200mほど進んでいただきますと当事務所がございます。青い建物(自然酵母パンブランジェトム・ソーヤーb-tom」様)の隣です。
                </div>
            </div>
            <div class="p-access-guide__item">
                <figure class="p-access-guide__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/access/n-office.png" alt="駐車場の写真">
                </figure>
                <div class="p-access-guide__title">北方面からお越しのお客様。
                </div>
                <div class="p-access-guide__text">
                    群馬県生涯学習センター様から約600mほど進んでいただきますと右側に当事務所がございます。
                </div>
            </div>
        </div>
    </section>

    <section class="p-access-guide l-container">
        <div class="c-section-title">
            <h2 class="c-section-title__top">駐車場のご案内</h2>
            <h3 class="c-section-title__bottom">Parking</h3>
        </div>
        <div class="p-access-guide__in">

            <div class="p-access-guide__item">
                <figure class="p-access-guide__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/access/Parking-1.png" alt="駐車場の写真">
                </figure>
                <div class="p-access-guide__text">
                    当社白の平家と2階建て貸家間の間が入り口です。
                </div>
            </div>
            <div class="p-access-guide__item">
                <figure class="p-access-guide__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/access/parking-2.png" alt="駐車場の写真">
                </figure>
                <div class="p-access-guide__text">
                    奥に進むと当社お客様駐車場がございます。
                </div>
            </div>
        </div>
    </section>

    <!-- 一言＋写真 -->
    <section class="l-container">
        <div class="c-msg c-msg--access">
            <div class="c-msg__text">
                <p>当社ホームページをご覧いただきありがとうございます。<br>
                    お会い出来るのを楽しみにしています！</p>
            </div>
            <div class="c-msg__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Bunkyo-Holmes/access/014.jpg" alt="代表の
            写真">
            </div>
        </div>
    </section>





    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-inview@1.1.2/jquery.inview.min.js"></script>

</body>

</html>