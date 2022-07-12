
// +++++ 物件スライダー +++++
$('.p-info-slider__in').slick({
  autoplay: true, //自動再生
  autoplaySpeed: 1000, //自動再生のスピード
  speed: 800, //スライドするスピード
  dots: false, //スライドしたのドット
  arrows: true, //左右の矢印
  // infinite: true, //スライドのループ
  // pauseOnHover: false, //ホバーしたときにスライドを一時停止しない
  // fade: true,
  slidesToShow: 3,
  // centerMode: true,
  variablewidth: true
});

// +++++ アクセススライダー +++++
$('.p-access-slide__in').slick({
  autoplay: true, //自動再生
  autoplaySpeed: 1000, //自動再生のスピード
  speed: 800, //スライドするスピード
  dots: false, //スライドしたのドット
  arrows: true, //左右の矢印
  // infinite: true, //スライドのループ
  // pauseOnHover: false, //ホバーしたときにスライドを一時停止しない
  // fade: true,
  slidesToShow: 4,
  // centerMode: true,
  variablewidth: true
});

// +++++ Animation in +++++
$(function () {
  $('.slide-in-right').on('inview', function (event, isInView) {
    if (isInView) {
      //表示領域に入った時
      $(this).addClass('fadeInRight animated');
      $(this).css('opacity', '1');
    }
  });
});