<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name=viewport content="initial-scale=1.0, maximum-scale=1, user-scalable=no" width=device-width>
  <title>bigboss</title>

  <?php wp_head(); ?>
</head>

<body>
  <button id="top_btn" class="btn_scroll_to_top">
    <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z" class=""></path>
    </svg>
  </button>
  <header id="main_header">
    <nav class="navbar navbar-expand-lg">
      <a class="brand-logo" href="#">
        <span class="navbar-brand-logo">
          <span>Detaling garage</span>
          <p>Big Boss</p>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="dropdown nav-item">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Авто услуги
            </a>

            <div class="dropdown-menu">
              <a href="javascript:void(0);" class="anchor dropdown-item" item="dry-cleaning" title="Химчистка">Химчистка
                салона</a>
              <a href="javascript:void(0);" class="anchor dropdown-item" item="safety-body" title="Защитные покрытия">Защитные покрытия кузова</a>
              <a href="javascript:void(0);" class="anchor dropdown-item" item="season" title="Подготовка к сезону">Подготовка авто к сезону</a>
              <a href="javascript:void(0);" class="anchor dropdown-item" item="polishing" title="Полировка кузова">Полировка кузова</a>
              <a href="javascript:void(0);" class="anchor dropdown-item" item="care-interior" title="Уход за кожей">Уход
                за кожей</a>
              <a href="javascript:void(0);" class="anchor dropdown-item" item="windshieldRepair" title="Уход за кожей">Ремонт стекла</a>
            </div>
          </li>
          <li class="nav-item active">
            <a href="javascript:void(0);" class="anchor" item="gallery" title="Галерея">Галерея</a>
          </li>
          <li class="nav-item active">
            <a href="javascript:void(0);" class="anchor" item="aboutUs" title="О нас">О нас</a>
          </li>
          <li class="nav-item active">
            <a href="javascript:void(0);" class="anchor" item="testimonials" title="Отзывы">Отзывы</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="anchor" item="contacts" title="Контакты">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main id="main_content" class="site-content">
    <?php
    include 'define.php';
    ?>

    <section class="section-border bg-main hidden-xs">
      <div class="container-fluid">
        <div class="main-screen">
          <div class="main-screen-info">
            <h1>Профессиональный детейлинг автомобилей любого класса</h1>
            <h2>Команда <span style="color: #e63f41;text-transform: uppercase;">Detaling garage</span> BIG BOSS
              гарантирует:
              <br /> - индивидуальный подход к каждому клиенту;
              <br /> - максимально высокий уровень качества выполненных работ;
              <br /> - доступную цену на услуги;
              <br /> - исключительно положительные эмоции.

            </h2>
            <div class="section-button">
              <button class="btn active" value="Консультация">Консультация</button>
              <button class="btn" value="Записать авто">Записать авто</button>
            </div>
          </div>

          <div class="owl-carousel owl-theme">
            <div> BMW </div>
            <div> AUDI </div>
            <div> LEXUS </div>
            <div> BENTLEY </div>
            <div> ASTON MARTIN </div>
            <div> ALFA ROMEO </div>
            <div> BUGATTI </div>
            <div> BUICK </div>
            <div> CADILLAC </div>
            <div> CHEVROLET </div>
            <div> CHRYSLER </div>
            <div> CITROEN </div>
            <div> DACIA </div>
            <div> DODGE </div>
            <div> FERRARI </div>
            <div> FIAT </div>
            <div> FORD </div>
            <div> GEELY </div>
            <div> GMC </div>
            <div> HONDA </div>
            <div> HUMMER </div>
            <div> HYUNDAI </div>
            <div> INFINITI </div>
            <div> ISUZU </div>
            <div> JAGUAR </div>
            <div> JEEP </div>
            <div> KIA </div>
            <div> KOENIGSEGG </div>
            <div> LAMBORGHINI </div>
            <div> LAND ROVER </div>
            <div> LEXUS </div>
            <div> LINCOLN </div>
            <div> LOTUS </div>
            <div> MASERATI </div>
            <div> MAZDA </div>
            <div> MERCEDES-BENZ </div>
            <div> MINI </div>
            <div> MITSUBISHI </div>
            <div> NISSAN </div>
            <div> OPEL </div>
            <div> PEUGEOT </div>
            <div> PONTIAC </div>
            <div> PORSCHE </div>
            <div> RENAULT </div>
            <div> ROLLS-ROYCE </div>
            <div> SEAT </div>
            <div> SKODA </div>
            <div> SUBARU </div>
            <div> TESLA </div>
            <div> TOYOTA </div>
            <div> VOLKSWAGEN </div>
            <div> VOLVO </div>
          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="anchor bottom-anchor" item="aboutUs">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout bg-white" id="aboutUs">
      <a href="javascript:void(0);" name="aboutUs"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>О компании BIGBOSS</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="about-us-content">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti maiores repudiandae reprehenderit
                  ipsa recusandae. Voluptate delectus, mollitia nisi culpa optio vel porro iure quos quasi nesciunt
                  voluptas magni. Quisquam, optio?
                </p>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti maiores repudiandae reprehenderit
                  ipsa recusandae.
                  Voluptate delectus, mollitia nisi culpa optio vel porro iure quos quasi nesciunt voluptas magni.
                  Quisquam, optio?
                </p>

                <div class="social-links">
                  <p>Ссылки на наши профили в соц. сетях</p>
                  <ul>
                    <li><a target="_blank" href="https://instagram.com/garagebigboss">
                        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                          </path>
                        </svg>
                      </a></li>
                    <li><a target="_blank" href="https://www.facebook.com/garagebigboss/">
                        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z">
                          </path>
                        </svg>
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="company-progress">
                <ul>
                  <li class="proress-item">
                    <span class="progress-title">
                      5 лет
                    </span>
                    <span class="progress-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti maiores repudiandae
                      reprehenderit
                      ipsa recusandae.
                    </span>
                  </li>

                  <li class="proress-item">
                    <span class="progress-title">
                      5 дипломов
                    </span>
                    <span class="progress-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti maiores repudiandae
                      reprehenderit
                      ipsa recusandae.
                    </span>
                  </li>

                  <li class="proress-item">
                    <span class="progress-title">
                      4,8 баллов
                    </span>
                    <span class="progress-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti maiores repudiandae
                      reprehenderit
                      ipsa recusandae.
                      <a target="_blanck" href="https://goo.gl/maps/aS7sKeySCV92">Смотреть профиль на Google maps</a>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href="javascript:void(0);" class="anchor bottom-anchor" item="testimonials">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout testimonials-bg" id="testimonials">
      <a href="javascript:void(0);" name="testimonials"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Отзывы о нашей работе</p>
        </div>
        <div class="section-content">
          <div class="owl-carousel owl-theme">
            <div class="testimonials-item">
              <div class="testimonials-user-photo">
                <img src="<?php echo get_field('avatar-1')['url']; ?>" alt="">
              </div>
              <p class="testimonials-user-name">
                <?php echo get_field('author-1') ?>
              </p>
              <div class="testimonials-content">
                <div class="testimonials-text">
                  <?php echo get_field('review-1') ?>
                </div>
              </div>
            </div>

            <div class="testimonials-item">
              <div class="testimonials-user-photo">
                <img src="<?php echo get_field('avatar-2')['url']; ?>" alt="">
              </div>
              <p class="testimonials-user-name">
                <?php echo get_field('author-2') ?>
              </p>
              <div class="testimonials-content">
                <div class="testimonials-text">
                  <?php echo get_field('review-2') ?>
                </div>
              </div>
            </div>

            <div class="testimonials-item">
              <div class="testimonials-user-photo">
                <img src="<?php echo get_field('avatar-3')['url']; ?>" alt="">
              </div>
              <p class="testimonials-user-name">
                <?php echo get_field('author-3') ?>
              </p>
              <div class="testimonials-content">
                <div class="testimonials-text">
                  <?php echo get_field('review-3') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href="javascript:void(0);" class="anchor bottom-anchor" item="gallery">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout bg-white" id="gallery">
      <a href="javascript:void(0);" name="gallery"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Галерея выполненных работ</p>
        </div>
        <div class="section-content">
          <div id="galleryGridFilters" class="filters">
            <div class="filter-item active" data-filter="*">
              Все работы
            </div>

            <div class="filter-item" data-filter=".dry-cleaning">
              Химчистка
            </div>

            <div class="filter-item" data-filter=".safety-body">
              Защитные покрытия
            </div>

            <div class="filter-item" data-filter=".season">
              Подготовка к сезону
            </div>

            <div class="filter-item" data-filter=".polishing">
              Полировка кузова
            </div>

            <div class="filter-item" data-filter=".care-interior">
              Уход за кожей
            </div>

            <div class="filter-item" data-filter=".baby">
              BABY BIGBOSS
            </div>
          </div>
          <div id="galleryGrid">
            <div class="element-sizer"></div>
            <?php
            foreach (acf_photo_gallery('gallery', $post->ID) as $image) : ?>
              <div class="element-item <?php echo ($image['caption']) ?>"><img src="<?php echo ($image['full_image_url']) ?>" alt=""></div>
            <?php endforeach; ?>
          </div>
          <div id="gridSlider" class="owl-carousel owl-theme"></div>
        </div>
      </div>

      <a href="javascript:void(0);" class="anchor bottom-anchor" item="dry-cleaning">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout margin-top_0" id="dryClearning">
      <a href="javascript:void(0);" name="dry-cleaning"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Химчистка салона</p>
        </div>

        <div class="section-description">
          <p>Детейлиг-химчистка салона - трудойомкий и весьма кропотливый процесс, который занимает от 10 до 15
            часов.
            Салон и багажник проходят до 5 уровней очистки.
            После полного высыхания вся кожа, винил и пластик салона пропитывается
            крем-кондиционером.</p>
        </div>

        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="questions" id="dryClearningQuestions">
                <div class="card">
                  <div class="card-header" id="questionOne">
                    <p class="card-title" data-toggle="collapse" data-target="#collapseQuestionOne" aria-expanded="true" aria-controls="collapseQuestionOne">
                      Что входит в химчистку салона?

                      <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
                        </path>
                      </svg>
                    </p>
                  </div>

                  <div id="collapseQuestionOne" class="collapse show" aria-labelledby="QuestionOne" data-parent="#dryClearningQuestions">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li>Потолок и боковые стойки</li>
                            <li>Ремни безопасности</li>
                            <li>Сидения и карты дверей</li>
                            <li>Торпедо и воздушные дифлекторы</li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li>Бардачек, дополнительные ниши и кнопки</li>
                            <li>Напольное покрытие</li>
                            <li>Багажный отсек с местом под запасное колесо</li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="questionTwo">
                    <p class="card-title" data-toggle="collapse" data-target="#collapseQuestionTwo" aria-expanded="false" aria-controls="collapseQuestionTwo">
                      Сколько времени занимает химчистка салона?

                      <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
                        </path>
                      </svg>
                    </p>
                  </div>
                  <div id="collapseQuestionTwo" class="collapse" aria-labelledby="QuestionTwo" data-parent="#dryClearningQuestions">
                    <div class="card-body">
                      <p>
                        Каждый элемент салона автомобиля проходит от 3 до 5 уровней очистки в зависимости от степени
                        загрязнений. После того как очистка завершена и салон автомобиля полностью сухой, производтся
                        антибактериальная обработка салона.
                        <br />
                        Весь этот процесс занимает в среднем от 10 до 15 часов.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="questionThree">
                    <p class="card-title" data-toggle="collapse" data-target="#collapseQuestionThree" aria-expanded="false" aria-controls="collapseQuestionThree">
                      Каким борудованием и материалами работаем?

                      <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
                        </path>
                      </svg>
                    </p>
                  </div>
                  <div id="collapseQuestionThree" class="collapse" aria-labelledby="QuestionThree" data-parent="#dryClearningQuestions">
                    <div class="card-body">
                      <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-6">
                          <ul>
                            <li>Моющий пылесос Karcher Puzzi 8/1</li>
                            <li>Сухой пылесос Karcher WD Premium</li>
                            <li>Парогенератор Karcher SC5</li>

                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li>Торнадор Z 020</li>
                            <li>Пеногенератор KGG066</li>
                            <li>Детейлинг кисточки и щетки для труднодоступных мест</li>
                          </ul>
                        </div>
                      </div>

                      <p>Из материалов, отдаем предпочтение Koch, Automagic, Gremmtex</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <div class="section-actions">
          <div class="row">
            <div class="col-md-12">
              <button class="btn active" value="Заказать
  химчистку">Заказать
                химчистку</button>
            </div>
          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="anchor bottom-anchor" item="safety-body">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout bg-white">
      <a href="javascript:void(0);" name="safety-body"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Защитные покрытия кузова</p>
        </div>
        <div class="section-description">
          <p>Основная функция покрытия - защитить кузов автомобиля от двух видов
            негативных
            воздействий:</p>

          <ul>
            <li>Химических (соль, реагенты, смолы, птичий помет, древесный клей, дешевая
              автохимия, ультрафиолет)</span></li>
            <li>Механических (снег, лед, песок, мошки и жучки)</li>
            </span>
          </ul>

          <p>
            Так же эти покрытия хорошо передают блеск и глубину цвета, делая внешний вид автомобиля
            эстетичным!
          </p>
        </div>

        <div class="section-content">
          <div class="products">
            <?php
            $allProtectiveCoveringServices = get_field('group_protective_covering');

            if ($allProtectiveCoveringServices) {
              foreach ($allProtectiveCoveringServices as $service) {
                $serviceObj = getServiceObj($service);

                drawServiceBlock($serviceObj);
              }
            }

            ?>

          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="anchor bottom-anchor" item="season">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout bg-black" id="season">
      <a href="javascript:void(0);" name="season"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Подготовка авто к сезону</p>
        </div>
        <div class="section-description">
          <p>Подготовка авто к сезону - это защита экстерьера и интерьера автомобиля от воздействия
            климатических условий.
            <br />Зимой это снег, лед, соли, реагенты и низкая температура, а летом -ультрафиолет,
            насекомые, древесный клей, битум.</p>
        </div>

        <div class="section-content">
          <div class="products">
            <?php
            $allSeasonServices = get_field('group_season');

            if ($allSeasonServices) {
              foreach ($allSeasonServices as $service) {
                $serviceObj = getServiceObj($service);

                drawServiceBlock($serviceObj);
              }
            }
            ?>
          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="anchor bottom-anchor" item="polishing">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout bg-white" id="polishing">
      <a href="javascript:void(0);" name="polishing"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Полировка кузова</p>
        </div>
        <div class="section-description">
          <p>Полировка является самым простым способом вернуть автомобилю привлекательный внешний вид. После проведения
            обработки с
            применением специальных средств и инструментов, лакокрасочный слой приобретает еще больший блеск. Также
            полировка
            кузова
            авто позволяет избавиться от небольших царапин и потертостей.</p>

        </div>
        <div class="section-content">
          <div class="products">
            <?php
            $allPolishingServices = get_field('group_polishing');

            if ($allPolishingServices) {
              foreach ($allPolishingServices as $service) {
                $serviceObj = getServiceObj($service);

                drawServiceBlock($serviceObj);
              }
            }
            ?>
          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="anchor bottom-anchor" item="stock">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout bg-stock" id="stock">
      <a href="javascript:void(0);" name="stock"></a>
      <div class="stock-block">

        <p class="stock-title">
          <?php
          $arr = [];
          foreach (get_field('group_1_headlight') as $i => $value) array_push($arr, $value);
          echo $arr[0];
          echo '<br/>';
          echo $arr[1]; ?>
        </p>
        <div class="stock-button">
          <button class="btn" value="Акция! Полировка фар">Заказать
            полировку</button>
        </div>
      </div>
    </section>

    <section class="section-layout bg-white" id="careInterior">
      <a href="javascript:void(0);" name="care-interior"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Уход за кожаным салоном</p>
        </div>
        <div class="section-description">
          <p>Давайте сравним кожаную обивку с кожей человека. Если зимой на холоде обветрились руки, что надужно
            сделать?
            Правильно - помыть и смазать кремом! Или летом, что-бы не сгореть нужно нанести на кожу крем.</p>
        </div>
        <div class="section-content">
          <div class="products">
            <?php
            $allLeathergServices = get_field('group_leather');

            if ($allLeathergServices) {
              foreach ($allLeathergServices as $service) {
                $serviceObj = getServiceObj($service);

                drawServiceBlock($serviceObj);
              }
            }
            ?>
          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="anchor bottom-anchor" item="windshieldRepair">
        <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">
          </path>
        </svg>
      </a>
    </section>

    <section class="section-layout" id="windshieldRepair">
      <a href="javascript:void(0);" name="windshieldRepair"></a>
      <div class="container-fluid">
        <div class="section-title">
          <p>Ремонт скола или трещины лобового стекла</p>
        </div>
        <div class="section-description">
          <p>Первое, что вам необходимо знать! Чем быстрее вы сделаете ремонт скола или трещины лобового стекла, тем
            качественнее будет результат. Очень важно, что бы в скол или трещину не попало много влаги и грязи!
            Для этого вырежьте кусок бумаги по размеру трещины или скола, приложите на повреждённый участок лобового
            стекла и поверх
            бумаги проклейке скотчем для того что бы клеевая основа скотча не попала в скол или трещину.
            После этого рекомендуем ехать в мастерскую на ремонт лобового стекла. В студии детейлинга гараж бигбос,
            ремонт лобового
            стекла занимает 30-40 минут.</p>
        </div>

        <div class="section-content">
          <div class="block-center">
            <button class="btn" value="Заказать ремонт">Заказать ремонт</button>

          </div>
        </div>
      </div>
    </section>

    <section class="section-layout bg-white map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28703.504758677445!2d30.579571134577666!3d50.51453679492831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4d111e0344157%3A0x76194794cb2eaa29!2sBIG+BOSS+%E2%80%A2+Detailing+Garage!5e0!3m2!1sru!2sua!4v1548779492403" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- Universal form -->
    <?php echo do_shortcode(
      '[contact-form-7 id="272" title="Контактная форма 1"]'
    ) ?>
    <a href="javascript:void(0);" name="contacts"></a>
    <footer id="main_footer">
      <a class="brand-logo" href="#">
        <span class="navbar-brand-logo">
          <span>Detaling garage</span>
          <p>Big Boss</p>
        </span>
      </a>

      <div class="footer-item">
        <p class="footer-item-title">Наши контакты</p>
        <ul>
          <li>ул. Радунская, 3 (Гаражный кооператив "Радосинь")</li>
          <li>067 484 4848</li>
          <li>support@bigboss.kiev.ua</li>
        </ul>
      </div>
      <div class="footer-item">
        <p class="footer-item-title">График работы</p>
        <ul>
          <li>ПН - ВС 10:00 - 21:00</li>
        </ul>
      </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>