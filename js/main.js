$(document).ready(function(){
    $('.wrapper').fadeIn(1000);
    $('#country').click(function(){
        $('.hide').slideToggle(500);
    });

    $('#vk-btn').click(function(){
        $('.vk-div').slideToggle(200);
    });
    $('#inst-btn').click(function(){
        $('.inst-div').slideToggle(200);
    });
    $('#facebook-btn').click(function(){
        $('.facebook-div').slideToggle(200);
    });


    // var object = {
    //     question: 'Что такое Lorem Ipsum?',
    //     answer: 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.'
    //     };
    // var object_1 = {
    //     question: 'Почему он используется?',
    //     answer: 'Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах.'
    // };
    // var object_2 = {
    //     question: 'Откуда он появился?',
    //     answer: 'Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.'
    // };

    // var faq = [
    //     [
    //         object.question,
    //         object.answer
    //     ],
    //     [
    //         object_1.question,
    //         object_1.answer
    //     ],
    //     [
    //         object_2.question,
    //         object_2.answer
    //     ]
    // ]
 
    // var sliders = [
    //     ['photo.jpg'],
    //     ['photo2.jpg'],
    //     ['photo3.jpg'],
    //     ['photo4.jpg'],
    //     ['photo5.jpg'],
    //     ['photo6.jpg'],
    // ]

    // sliders.forEach(function(new_item) {
    //     $('.slider').append (
    //         '<img src="img/photo6.jpg" alt="6"></img>' +
    //         '<img src="img/' + new_item[0] + '">' +    
    //         '<img src="img/photo.jpg" alt="1">'
            
    //     );
    
// });
    // $('.jquery').append(
    //     '<div class="showhide">' + 
    //             '<h3>' + object.question + '</h3>' +
    //             '<div style="width: 300px;">' + 
    //                 '<button class="btn" style="background: white; color: black;">Показать</button>' + 
    //                 '<p style="text-align: left;">' + object.answer + '</p>' +
    //             '</div>' + 
    //     '</div>' +
    //     '<div class="showhide">' + 
    //             '<h3>' + object_1.question + '</h3>' +
    //             '<div style="width: 300px;">' + 
    //                 '<button class="btn" style="background: white; color: black;">Показать</button>' + 
    //                 '<p style="text-align: left;">' + object_1.answer + '</p>' +
    //             '</div>' + 
    //     '</div>' +
    //     '<div class="showhide">' + 
    //             '<h3>' + object_2.question + '</h3>' +
    //             '<div style="width: 300px;">' + 
    //                 '<button class="btn" style="background: white; color: black;">Показать</button>' + 
    //                 '<p style="text-align: left;">' + object_2.answer + '</p>' +
    //             '</div>' + 
    //     '</div>'
    // );

    
    
    $('.btn').click(function() {
        var hide = $(this).next();
        var display = hide.css('display');

        if(display == 'none') {
            hide.slideDown(300);
            $(this).text('Скрыть');
        } else {
            hide.slideUp(300);
            $(this).text('Показать');
        }
    });
    $('.title').animate({marginTop: 0}, 1000);

    var slide = setInterval(function() {
        $('.slide-back').animate({opacity: '1'});
        $('.window-slide').animate({marginRight: 0});
    }, 1000);

    $('#close').click(function() {
        $('.slide-back').hide(300);
        console.log(123);
        clearInterval(slide);
    });
    
    // $('#faq-link').click(function() {
    //     var faq_coord = $('#faq').offset().top;
    //     $('html, body').animate({scrollTop: faq_coord}, 1000);
    // });

    // $('#info-link').click(function() {
    //     var info_coords = $('#information').offset().top;
    //     $('html, body').animate({scrollTop: info_coords}, 1000);
    // });
    // $('#footer-link').click(function() {
    //     var info_coords = $('#footer').offset().top;
    //     $('html, body').animate({scrollTop: info_coords}, 1000);

    // });
    // $('#information-btn').click(function() {
    //     var info_coords = $('#information').offset().top;
    //     $('html, body').animate({scrollTop: info_coords}, 1000);
    // });

    // $('#update').click(function() {
    //     var info_coords = $('header').offset().top;
    //     $('html, body').animate({scrollTop: info_coords}, 1000);
    // });

    $(window).scroll(function() {
        var top = $('#faq')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 0) {
            $('#faq').animate({opacity: 1}, 1000);
        }
    });
    $(window).scroll(function() {
        var top = $('#slider-box')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 0) {
            $('#slider-box').animate({opacity: 1}, 1000);
        }
    });
    $(window).scroll(function() {
        var top = $('#information')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 0) {
            $('#information').animate({opacity: 1}, 1000);
        }
    });

    // $(window).scroll(function() {
    //     var slide_scroll = $('.window-slide')[0].getBoundingClientRect().slide_scroll;
    //     var slide_coord = window.innerHeight;
    //     console.log(slide_coord);
    //     if (slide_coord > 0) {
    //         $('.window-slide').animate({marginTop: '300px'}, 400);
    //     }
    // });

    // SLIDER

    var width = 1200;
    width = parseInt(width);
    $('.slider').css('margin-left', -width * 6);

    setInterval(function() {
        var margin = $('.slider').css('margin-left');
        margin = parseInt(margin);

        if (margin == -width) {
            $('.slider').css('margin-left', -width * 7);
            margin = -width * 6;
            console.log('Подмена!');
        } else {
            margin = margin + width;
        }
        $('.slider').animate({marginLeft: margin}, 2000);
    }, 4000);

});



