$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 40) {
      $(".navbar-me").addClass("fixed-me");

    } else {
      $(".navbar-me").removeClass("fixed-me");
    }
  });
});

const responsiveBtnIcon = document.querySelector(".responsive-menu-btn");
const navMenu = document.querySelector(".nav__menu");

responsiveBtnIcon.addEventListener("click", () => {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});


$('a').click(function () {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500);
  return false;
});

// Cache selectors
var topMenu = $(".menu-left"),
  topMenuHeight = topMenu.outerHeight() + 15,
  // All list items
  menuItems = topMenu.find("a"),
  // Anchors corresponding to menu items
  scrollItems = menuItems.map(function () {
    var item = $($(this).attr("href"));
    if (item.length) { return item; }
  });

// Bind to scroll
$(window).scroll(function () {
  // Get container scroll position
  var fromTop = $(this).scrollTop() + topMenuHeight;

  // Get id of current scroll item
  var cur = scrollItems.map(function () {
    if ($(this).offset().top < fromTop)
      return this;
  });
  // Get the id of the current element
  cur = cur[cur.length - 1];
  var id = cur && cur.length ? cur[0].id : "";
  // Set/remove active class
  menuItems
    .parent().removeClass("active")
    .end().filter("[href='#" + id + "']").parent().addClass("active");
});

console.log('ready')



$(document).ready(function () {
  console.log('ready')
  function getUsers() {
    $.ajax({
      dataType: 'jsonp',
      method: 'GET',
      url: 'https://creator.zoho.com/api/json/inmuebles/view/Inmuebles_Report',
      data: {
        authtoken: '034d2711716cb3cbfe88099c5f47beba',
        zc_ownername: 'nube_dinamica',
        scope: 'creatorapi',
        // criteria: '(ubicacion == "Medellin - Antoquía")',
      },
      success: function (response) {
        // console.log(response);
        const data = response
        // console.log(data.Inmuebles)
        // var filt = data.Inmuebles.filter(respon => respon.Ciudad == "Medellín -Antioquia" && respon.Tipo == "Apartamento" & respon.Precio == "$ 1,100,000" & respon.Estrato == "3")
        // var filt = data.Inmuebles.filter(respon => respon.Ciudad == "Medellín -Antioquia" && respon.Tipo == "Apartamento" & respon.Precio == "$ 80,000,000" & respon.Estrato == "6")
        // var filt = data.Inmuebles.filter(respon => respon.Ciudad == "Medellín -Antioquia" && respon.Tipo == "Casa" & respon.Precio == "$ 900,000" & respon.Estrato == "6")
        console.log(data);
      },
      error: function (error) {
        console.log(error.statusText);
      },
    });
  }
});

