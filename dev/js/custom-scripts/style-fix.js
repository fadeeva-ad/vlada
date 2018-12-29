import Swioer from 'swiper';
import {
    axlab
} from '../mainJs.js';

axlab.styleFix = {
    mainBanner: function () {
        if ($('.block-1__banner').length && (document.documentElement.clientWidth > 1023)) {
            let offset = $(".block-1").offset();
            let height = $(".block-1").height() + 390;
            let width = document.documentElement.clientWidth - offset.left;
            $('.block-1__banner').css({
                "width": width,
                "height": height
            })
        }
    },

    block11: function () {
        if ($('.block-11__bg').length && (document.documentElement.clientWidth > 1023)) {
            let offset = $(".block-11").offset();
            let height = $(".block-11").height();
            let width = document.documentElement.clientWidth - offset.left;
            $('.block-11__bg').css({
                "width": width,
                "height": height,
                "top": offset.top,
                "opacity": 1
            })
        }
    },

    init: function () {
        $(window).on("resize", axlab.styleFix.mainBanner());
        axlab.styleFix.mainBanner();
        axlab.styleFix.block11();
    }
}


$(function () {
    axlab.styleFix.init();
})