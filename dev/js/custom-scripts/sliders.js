import Swiper from 'swiper';
import {
    axlab
} from '../mainJs.js';

axlab.sliders = {
    storySlider: function () {
        var storySlider = new Swiper(".block-5 .swiper-container", {
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                prevEl: ".block-5__arrow_prev",
                nextEl: ".block-5__arrow_next"
            }
        })
    },

    defaultSlider: function () {
            let defaultSlider = new Swiper(".default-slider", {
                loop: true,
                slidesPerView: 1,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                navigation: {
                    prevEl: ".navigation__arrow_prev",
                    nextEl: ".navigation__arrow_next"
                }
            })
    },

    verticalSlider: function () {
        var verticalSlider = new Swiper(".prepods-slider .swiper-container", {
            loop: true,
            slidesPerView: 1,
            effect: 'fade',
            autoHeight: true,
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                prevEl: ".prepods-slider .navigation__arrow_prev",
                nextEl: ".prepods-slider .navigation__arrow_next"
            }
        })
    },

    init: function () {
        axlab.sliders.storySlider();
        axlab.sliders.defaultSlider();
        axlab.sliders.verticalSlider();
    }
}


$(function () {
    axlab.sliders.init();
})