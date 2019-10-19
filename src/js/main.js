    // Инициализация WOW.js
    new WOW().init();
    
    $(document).ready(function(){
      $('#brif-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2,
          },
          email: {
            required: true,
            email: true
          },
          phone: "required"
        },
        errorElement: "em",
        errorClass: "invalid",
        messages: {
          username: {
            required: "Заполните поле",
            minlength: jQuery.validator.format("Осталось символов: {0}")
          },
          email: {
            required: "Заполните поле",
            email: "Укажите верный email"
          },
          phone: "Заполните поле"
        }
      });
      // Маска для телефона
      $('.phone').mask('+7 (999) 999-99-99');
      $('#modal-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2,
          },
          phone: "required"
        },
        errorElement: "em",
        errorClass: "invalid",
        messages: {
          username: {
            required: "Заполните поле",
            minlength: jQuery.validator.format("Осталось символов: {0}")
          },
          phone: "Заполните поле",
        }
      });
      // Маска для телефона
      $('.phone').mask('+7 (999) 999-99-99');
      $('#offers-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2,
          },
          phone: "required"
        },
        errorElement: "em",
        errorClass: "invalid",
        messages: {
          username: {
            required: "Заполните поле",
            minlength: jQuery.validator.format("Осталось символов: {0}")
          },
          phone: "Заполните поле",
        }
      });
      // Маска для телефона
      $('.phone').mask('+7 (999) 999-99-99');
      $('#offers-form').on('submit', function name(event) {
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "mail.php",
          data: $(this).serialize(),
          success: function (response) {
            console.log('Прибыли данные: ' + response);
            $('#offers-form')[0].reset();
            
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.error(jqXHR + " " + textStatus);
          }
        });
      })
      // Слайдер
      $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: $('.arrows__left'),
        nextArrow: $('.arrows__right'),
        responsive: [
        {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
        ]
    });
  });

 