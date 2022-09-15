$(document).ready(function(){

    // Index Slider

    $('.index-slider-section .owl-carousel').owlCarousel({
        items: 1,
        margin: 16,
        loop: true, 
        nav: false,
        dots: true,
        dotsEach: true,
        lazyLoad: false,
        autoplay: true,
        autoplaySpeed: 1500,
        navSpeed: 1500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true, 
        responsive: {
            0: {
                items: 1,
            },
            750: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    });

    // Top Category Slider

    $('.top-category .owl-carousel').owlCarousel({
        items: 6,
        margin: 10,
        loop: true, 
        nav: true,
        dots: false,
        dotsEach: false,
        lazyLoad: false,
        autoplay: false,
        // autoplaySpeed: 1500,
        // navSpeed: 1500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true, 
        responsive: {
            0: {
                items: 2,
            },
            750: {
                items: 3,
            },
            1000: {
                items: 6,
            },
            1370:{
                items: 8
            }
        }
    });

    // Flash Sale Slider

    $('.flash-list .owl-carousel').owlCarousel({
        items: 4,
        margin: 16,
        loop: true, 
        nav: true,
        dots: false,
        dotsEach: false,
        lazyLoad: false,
        autoplay: false,
        // autoplaySpeed: 1500,
        // navSpeed: 1500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true, 
        responsive: {
            0: {
                items: 2,
            },
            750: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            1300: {
                items: 5,
            },
            1370: {
                items: 6,
            }
        }
    });

    // Hot Deals Slider

    $('.flash-sale .owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        loop: true, 
        nav: true,
        dots: false,
        dotsEach: false,
        lazyLoad: false,
        autoplay: false,
        // autoplaySpeed: 1500,
        // navSpeed: 1500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true, 
        responsive: {
            0: {
                items: 1,
            },
            750: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    });

});