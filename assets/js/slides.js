$(document).ready(function () {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        vertical: true,
        infinite: false
    });

    $('.slide-spec').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.nav-spec'
    });
    $('.nav-spec').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        asNavFor: '.slide-spec',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        vertical: true,
        infinite: false,

    });
})