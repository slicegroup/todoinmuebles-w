$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 40) {
      $(".navbar-me").addClass("fixed-me");
      $(".logo").addClass('other-logo').attr("src", "assets/img/logo.png");
      $('.item-color').addClass('fixed-color');
    } else {
      $(".navbar-me").removeClass("fixed-me");
      $(".logo").removeClass('other-logo').attr("src", "assets/img/power.png");
      $('.item-color').removeClass('fixed-color');
    }
  });
});


wow = new WOW(
  {
    boxClass: 'wow',      // default
    animateClass: 'animated', // default
    offset: 0,          // default
    mobile: false,       // default
    live: true        // default
  }
)
wow.init();


