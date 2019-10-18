<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/normalaize/normalize.css">
  <link rel="stylesheet" href="src/css/slick.css">
  <link rel="stylesheet" href="src/css/animate.css">
  <link rel="stylesheet" href="src/css/style.css">
  <title>Ремонт Квартир</title>
</head>
<body>
<?php include('navbar.php'); ?>

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">
              Спасибо за заявку!
            </h1>
            <span class="hero-text__subtitle">
              Мы свяжемся с вами в течении 15 минут
            </span>
            <ul class="hero-list">
              <li class="hero-list__item wow fadeInRight" data-wow-delay="0.1s">
                <div class="hero-list__image">
                  <img src="src/img/clock.png" alt="Часы">
                </div>
                <span class="hero-list__text">
                  Точно соблюдаем сроки
                </span>
              </li>
              <li class="hero-list__item wow fadeInLeft" data-wow-delay="0.2s">
                <div class="hero-list__image">
                  <img src="src/img/calculator.png" alt="Калькулятор">
                </div>
                <span class="hero-list__text">
                  Рассчитаем смету на работы
                  и материалы в день обращения
                </span>
              </li>
              <li class="hero-list__item wow fadeInUp" data-wow-delay="0.3s">
                <div class="hero-list__image">
                  <img src="src/img/paint-board.png" alt="Доска с красками">
                </div>
                <span class="hero-list__text">
                  Предложим более 100 вариантов 
                  исполнения дизайна Вашего жилья
                </span>
              </li>
            </ul>
          </div>
          <!-- /.hero-text -->
          <div class="hero-image">
            <img src="src/img/hero_image.png" alt="Пример отделки">
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>

  </main>

  <footer class="footer">
    <div class="map" id="map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A01a53c8593c247d561028ed0bcf2601a367920333b427976145cae70afacde09&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">
            Приезжайте к нам в гости!
            <span class="contacts-special">Проконсультируем Вас</span> 
            по всем вопросам ремонта           
          </h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="src/img/footer/map-placeholder.png" alt="">
              </span> <!-- /.contacts-list__item -->
              <span class="contacts-list__text">
                г. Москва <br>
                <span class="contacts-list__boldtext">
                  ул. Ленинга, д. 10,<br>
                  корпус 2, оф. 308
                </span>
              </span> <!-- /.contacts-list__text -->
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="src/img/footer/clock-with-white-face.png" alt="">
              </span> <!-- /.contacts-list__item -->
              <span class="contacts-list__text">
                Режим работы: <br>
                <span class="contacts-list__boldtext">
                  с 9:00 до 18:00
                </span>
              </span> <!-- /.contacts-list__text -->
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="src/img/footer/phone-call-button.png" alt="">
              </span> <!-- /.contacts-list__item -->
              <span class="contacts-list__text">
                Телефон: <br> 
                <span class="contacts-list__boldtext">
                  <a href="tel:+ 7(495)42-251-31" class="contacts__phone">+ 7 (495) 42-251-31</a>
                </span>
              </span> <!-- /.contacts-list__text -->
            </li>
          </ul>
        </div>
        <!-- /.contacts -->
      </div>
      <!-- /.contacts-block -->
    </div>
  </footer>

  
  <!-- <script src="src/js/main.js"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="src/js/modal.js"></script>
  <script src="src/js/scroll-top.js"></script>
  <script src="src/js/slick.min.js"></script>
  <script src="src/js/wow.min.js"></script>
  <script src="src/js/jquery.validate.min.js"></script>
  <script src="src/js/jquery.maskedinput.min.js"></script>

  <script>
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
    
  </script>

  <div id="toTop"><button class="scroll_top" id="scroll_top"></button></div>
</body>
</html>