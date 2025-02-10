
//Testimonial slider
$('.testimonialSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    draggable: true,
    swipeToSlide: true,
    dots: true,
    arrows:false,
    pauseOnHover: true,
    centerMode: false,
});
//Testimonial slider


//Related Projects slider
$('.relatedProjectsSlider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: false,
    infinite: true,
    draggable: true,
    swipeToSlide: true,
    dots: false,
    arrows:true,
    appendArrows: $('.relatedProjectsSlider-nav'),
    pauseOnHover: false,
    centerMode: false,
    responsive: [
        {
            breakpoint: 1199.98,
            settings: {slidesToShow: 2,}
        },
        {
            breakpoint: 575.98,
            settings: {slidesToShow: 1,}
        },
    ]
});
//Related Projects slider



//sticky header
$(window).scroll(function () {
    if ($(this).scrollTop() > 2) {
        $('header').addClass('sticky')
    } else {
        $('header').removeClass('sticky')
    }
});
//sticky header



