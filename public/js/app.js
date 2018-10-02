'use strict';

function squareImgs (img) {
    const ITEM_WIDTH = img.width();
    img.height(ITEM_WIDTH);
}

function hightlightChoosenMenuBtn() {
    const LOCATION = window.location.href;

    if (LOCATION.indexOf('catalog') !== -1) {
        $('.menu__link').removeClass('active');
        $('.menu__link_catalog').addClass('active');
    } else if (LOCATION.indexOf('index') !== -1) {
        $('.menu__link').removeClass('active');
        $('.menu__link_home').addClass('active');
    }
}

function showFirsComment() {
    $('.comments__wrapper').first().addClass('active');
}



$(document).ready(function () {

    squareImgs($('.item__content'));

    hightlightChoosenMenuBtn();

    showFirsComment();

    $('.js-comment-btn').on('click', function callCommentForm() {
        console.log('comment')
    });

    $('.order-btn').on('click', function () {
        let item_id = $(this).data('item_id');

        let url = "app/include/function.php/set_cart";
        $.ajax({
            type: "POST",
            url: url,
            data: 'item_id=' + item_id,
            success: function () {
                console.log('success');
            }
        });
    });

    $('.comments__next').on('click', function showNextComment() {

        if ($(this).closest('.comments__btn-wrapper').data('current') !== $('.comments__maximum').data('max')) {

            $(this)
                .closest($('.comments__wrapper'))
                .removeClass('active')
                .next()
                .addClass('active');
        } else {

            $(this)
                .closest($('.comments__wrapper'))
                .removeClass('active');

            $('.comments__wrapper')
                .first()
                .addClass('active');
        }
    });

    $('.comments__prev').on('click', function showPreviewComment() {

        if ($(this).closest('.comments__btn-wrapper').data('current') !== 1) {

            $(this)
                .closest($('.comments__wrapper'))
                .removeClass('active')
                .prev()
                .addClass('active');
        } else {

            $(this)
                .closest($('.comments__wrapper'))
                .removeClass('active');

            $('.comments__wrapper')
                .last()
                .addClass('active');
        }
    })

});

