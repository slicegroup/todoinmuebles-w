$(document).ready(function () {
    $(".single-item").slick({
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 500,
        infinite: true,
        cssEase: 'linear',
        fade: true,
        arrows: false,
        dots: true,
    });
});
$(document).ready(function () {
    $('.multiple-items').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 700,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }
        ]
    });
});

// $(document).ready(function () {
//     $('.slider-for').slick({
//         autoplay: false,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: false,
//         fade: true,
//         asNavFor: '.slider-nav'
//     });
//     $('.slider-nav').slick({
//         autoplay: false,
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         asNavFor: '.slider-for',
//         dots: true,
//         centerMode: true,
//         focusOnSelect: true
//     });

// });


// $('.slider-for').slick({
//     autoplay: false,
//     autoplaySpeed: 3000,
//     speed: 500,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav'
// });
// $('.slider-nav').slick({
//     autoplay: false,
//     autoplaySpeed: 3000,
//     speed: 500,
//     slidesToShow: 4,
//     slidesToScroll: 1,
//     asNavFor: '.slider-for',
//     dots: false,
//     arrows: false,
//     focusOnSelect: true
// });

// $('.single-item-rtl').slick({
//     rtl: true
// });



