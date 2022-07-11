$('.js-hamburger').click(function() {
if ($(".js-hamburger").hasClass('is-active')) {
  $(".js-hamburger").removeClass('is-active');
  $(".js-drawer-menu").removeClass('is-active');
  $(".p-header__logo").removeClass('is-active');
} else {
  $(".js-hamburger").addClass("is-active");
  $(".js-drawer-menu").addClass("is-active");
  $(".p-header__logo").addClass("is-active");
}
});