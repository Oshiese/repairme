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
              Внутренняя отделка 
              помещений "под ключ"
            </h1>
            <span class="hero-text__subtitle">
              с гарантией качества, прописанной в договоре
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
    <!-- /.hero -->
    <section class="offer section">
      <div class="container">
        <div class="offer-block">
          <h2 class="section-title offer__title">
            Мы бесплатно разработаем 
            дизайн-проект Вашего жилья 
            и реализуем его!
          </h2>
          <!-- /.section-title -->
          <span class="section-subtitle offer__subtitle">
            Оставьте заявку на разработку 
            бесплатного дизайн-проекта!
          </span>
          <!-- /.section-subtitle -->
          <form action="mail.php" method="POST" class="form offer__form" id="offers-form">
            <div class="input-group">
              <input type="text" name="username" class="input offer__input" placeholder="Ваше имя">
            </div>
            <div class="input-group">
              <input type="tel" name="phone" class="input offer__input phone" placeholder="Ваш телефон">
            </div>
            <button class="button offer__button">Получить бесплатный дизайн-проект
            </button>
          </form>
          <!-- form offer__form -->
          <div class="offer-span">
            <span class="span offer__span">
              Наш менеджер перезвонит Вам
              в течение 60 секунд              
            </span> 
          </div>
          <!-- /.span offer__span -->
          <div class="offer-span2">
            <span class="span offer__span2">
              или перезвоните нам сами
            </span>
            <a href="tel:+7 (495) 42-251-31" class="offer__phone">
              +7 (495) 42-251-31
            </a>
          </div>
          <!-- /.span offer__span 2-->
        </div>
        <!-- offer-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.offer -->
    <section class="section portfolio">
      <div class="container">
        <h2 class="section-title portfolio__title">
          Работая с 2007 года,
          мы сделали более 500 ремонтов в квартирах и домах
        </h2>

        <div class="slider">
          <div class="slider__item"><img class="slider__image" src="src/img/portfolio/slider_1.jpg" alt="Пример работы 1"></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="src/img/portfolio/slider_2.jpg" alt="Пример работы 2"></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="src/img/portfolio/slider_3.jpg" alt="Пример работы 3"></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="src/img/portfolio/slider_1.jpg" alt="Пример работы 1"></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="src/img/portfolio/slider_2.jpg" alt="Пример работы 2"></div>
          <!-- /.slider__item -->
          <div class="slider__item"><img class="slider__image" src="src/img/portfolio/slider_3.jpg" alt="Пример работы 3"></div>
          <!-- /.slider__item -->
        </div>
        <!-- /.slider -->
        <div class="arrows portfolio__arrows">
          <div class="arrows__left">
            <img src="src/img/portfolio/left-arrow.png" alt="">
          </div>
          <div class="arrows__right">
            <img src="src/img/portfolio/right-arrow.png" alt="">
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section portfolio -->
    <section class="section price">
      <div class="container">
        <h2 class="section-title price__title">
          У нас очень гибкая система скидок
          на комплексные работы!
        </h2>
        <span class="section-subtitle price__subtitle">
          Прайс на наши услуги
        </span>
        <div class="cards">
          <div class="card price__card wow fadeInDown" data-wow-delay="0.1s">
            <div class="card__image"><img src="src/img/price/bathroom.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">
                Ремонт ванных комнат и с/у
              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInDown" data-wow-delay="0.2s">
            <div class="card__image"><img src="src/img/price/living.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">
                Ремонт комнат и квартир
              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInDown" data-wow-delay="0.3s">
            <div class="card__image"><img src="src/img/price/office.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">
                Отделка офисных помещений
              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
            <div class="card__image"><img src="src/img/price/buidings.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">
                Ремонт в новостройках
              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
            <div class="card__image"><img src="src/img/price/kitchen.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">
                Ремонт кухонь
              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
            <div class="card__image"><img src="src/img/price/houses.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">
                Ремонт дач и коттеджей
              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.cards -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section price -->
    
    <section class="section steps">
      <div class="container">
        <h2 class="section-title steps__title">
          Наши специалисты готовы выехать на замер
          в любое удобное для Вас время
        </h2>
        <!-- /.section-title steps__title -->
        <span class="section-subtitle steps__subtitle">
          5 шагов до ремонта
        </span>
        <!-- /.section-subtitle steps__subtitle -->
        <div class="steps-block">
          <div class="step wow fadeInLeft" data-wow-delay="0.1s">
            <div class="step__image">
              <img src="src/img/steps/woman-with-headset.png" alt="Женщина">
            </div>
            <!-- /.step__image -->
            <p class="step__text">
              Вы звоните нам
              или оставляете заявку
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step wow fadeInLeft" data-wow-delay="0.2s">
            <div class="step__image">
              <img src="src/img/steps/wall-clock.png" alt="Часы">
            </div>
            <!-- /.step__image -->
            <p class="step__text">
              Согласуем удобное
              для Вас время выезда 
              специалиста на замер
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step wow fadeInLeft" data-wow-delay="0.3s">
            <div class="step__image">
              <img src="src/img/steps/money.png" alt="Деньги">
            </div>
            <!-- /.step__image -->
            <p class="step__text">
              Рассчитываем смету
              согласовываем
              с Вами
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step wow fadeInLeft" data-wow-delay="0.4s">
            <div class="step__image">
              <img src="src/img/steps/folded-document-icon.png" alt="Документ">
            </div>
            <!-- /.step__image -->
            <p class="step__text">
              Подписываем договор
              закупаем материал
              по оптовым ценам
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step wow fadeInLeft" data-wow-delay="0.5s">
            <div class="step__image">
              <img src="src/img/steps/calendar.png" alt="Календарь">
            </div>
            <!-- /.step__image -->
            <p class="step__text">
              Выполняем ремонт
              в указанные сроки
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
        </div>
        <!-- /.steps-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section steps -->

    <div class="section brif">
      <div class="container">
        <div class="brif-block">
          <div class="interview brif__interview">
            <h3 class="interview__title">
              Мы можем озвучить Вам примерную стоимость
              работы и материалов по телефону
            </h3>
            <span class="interview__subtitle">
              Для этого нужно ответить на 4 вопроса:
            </span>
            <ul class="interview-list">
              <li class="interview-list__item">
                <span class="interview-list__counter">
                  1
                </span> <!-- /.interview-list__counter -->
                <span class="interview-list__text">
                  Какова площадь помещения?
                </span> <!-- /.interview-list__text -->
              </li>
              <!-- /.interview-list__item -->
              
              <li class="interview-list__item">
                <span class="interview-list__counter">
                  2
                </span> <!-- /.interview-list__counter -->
                <span class="interview-list__text">
                  У Вас новостройка или вторичное жилье?
                </span> <!-- /.interview-list__text -->
              </li>
              <!-- /.interview-list__item -->

              <li class="interview-list__item">
                <span class="interview-list__counter">
                  3
                </span> <!-- /.interview-list__counter -->
                <span class="interview-list__text">
                  Где находится помещение, в котором будет 
                  производиться ремонт?
                </span> <!-- /.interview-list__text -->
              </li>

              <!-- /.interview-list__item -->
              <li class="interview-list__item">
                <span class="interview-list__counter">
                  4
                </span> <!-- /.interview-list__counter -->
                <span class="interview-list__text">
                  Назначение помещения?
                </span> <!-- /.interview-list__text -->
              </li>
              <!-- /.interview-list__item -->
            </ul>
            <!-- /.interview-list -->
          </div>
          <!-- /.interview brif__interview -->
          <div class="form brif__form">
            <h3 class="form__title">
              Оставьте заявку на бесплатный 
              расчет ремонта по телефону                
            </h3>
            <span class="form__subtitle">
              Для этого заполните форму ниже
            </span>
            <form action="#" id="brif-form">
              <input type="text" name="username" class="input brif__input1" placeholder="Ваше имя">
              <input type="tel" name="phone" class="input brif__input2 phone" placeholder="Ваш телефон">
              <input type="email" name="email" class="input brif__input3" placeholder="Ваш email">
              <button class="button brif__button">Узнать стоимость</button>
              <span class="form__description">
                  Мы перезвоним Вам в течение 60 секунд
              </span>
            </form>
          </div>
          <!-- /.form brif__form -->
        </div>
        <!-- /.brif-block -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.section brif -->
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
  <div class="modal" id="modal">
    <div class="modal-dialog">
      <button class="modal-dialog__close" id="close">
        &times;
      </button>
      <h4 class="modal-dialog__title">
        Узнайте точную стоимость
        ремонта по телефону!
      </h4>
      <span class="modal-dialog__subtitle">
        Заполните поля ниже - мы свяжемся с Вами
      </span>
      <form action="#" class="modal-dialog__form" id="modal-form">
        <input type="text" name="username" class="input modal-dialog__input" placeholder="Ваше имя">
        <input type="tel" name="phone" class="input modal-dialog__input phone" placeholder="Ваш телефон">
        <button class="button modal-dialog__button">Узнать стоимость
        </button>
      </form>
      <span class="modal-dialog__span">
          Или Вы можете перезвонить нам сами
          по телефону:          
      </span>
      <a href="+7 (8182) 42-51-31" class="modal-dialog__phone">
        +7 (8182) 42-51-31
      </a>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  
  
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
  <script src="src/js/main.js"></script>

  <div id="toTop"><button class="scroll_top" id="scroll_top"></button></div>
</body>
</html>