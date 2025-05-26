<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Drupal-coder by MM</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">


    <link rel="stylesheet" href="styles/style.css" media="screen">

    <link rel="stylesheet" href="styles/header_style.css">
    <script src="scripts/header_script.js"></script>

    <link rel="stylesheet" href="./styles/3_styles.css">
    <script src="./scripts/scrypt.js" defer></script>

    <link rel="stylesheet" href="./styles/1_style.css" media="screen">
    <script src="./scripts/accordion.js" defer></script>

    <link rel="stylesheet" href="./styles/2_style.css">

    <link rel="stylesheet" href="./styles/4_style.css" media="screen">

    <link rel="stylesheet" href="./styles/tariffStyle.css">
    <script src="./scripts/tariff.js" defer></script>

    <link rel="stylesheet" href="./styles/5_style.css" type="text/css">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="./scripts/slides.js"></script>
    
  </head>

  <body>

    <header class="navbar navbar-default navbar-expand-lg fixed-bottom sticky-lg-top d-flex justify-content-center" id="header">
      <div class="container-fluid text-center row d-flex justify-content-center">
        <div class="col-12 row d-flex justify-content-center ">
          <div class="col-12 col-lg-2 d-flex align-middle align-items-center align-text-center justify-content-between">

            <figure class="figure align-middle align-items-center my-auto">
            <a class="navbar-brand align-middle" id="brand" href="#">
                <img src="./sources/logo-initlab.svg" class="figure-img img-fluid " alt="...">
            </a></figure>
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="col-10 collapse navbar-collapse" id="navbarNavDropdown"
            style="margin:0 10%">
            <div class="container-fluid text-center">
              <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="#">ПОДДЕРЖКА DRUPAL</a>
                </li>
                <li class="nav-item expanded dropdown" id="devops">
                  <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" id="devops_a">
                    DEVOPS
                  </a>
                  <ul class="dropdown-menu" id="devops_ul">
                    <li><a class="dropdown-item" href="#">Миграция</a></li>
                    <li><a class="dropdown-item" href="#">Бекапы</a></li>
                    <li><a class="dropdown-item" href="#">Аудит безопасности</a></li>
                    <li><a class="dropdown-item" href="#">Оптимизация скорости</a></li>
                    <li><a class="dropdown-item" href="#">Переезд на HTTPS</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">БЛОГ</a>
                </li>
                <li class="nav-item dropdown" id="prodvizhenie">
                  <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" id="prodvizhenie_a">
                    ПРОДВИЖЕНИЕ
                  </a>
                  <ul class="dropdown-menu" id="prodvizhenie_ul">
                    <li><a class="dropdown-item" href="#">Реклама</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown" id="about_us">
                  <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" id="about_us_a">
                    О НАС
                  </a>
                  <ul class="dropdown-menu" id="about_us_ul">
                    <li><a class="dropdown-item" href="#">Команда</a></li>
                    <li><a class="dropdown-item" href="#">DrupalGive</a></li>
                    <li><a class="dropdown-item" href="#">Курсы Drupal</a></li>
                    <li><a class="dropdown-item" href="#">Вакансии</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ПРОЕКТЫ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">КОНТАКТЫ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
      

      <div class="container-fluid header">
        <video autoplay muted loop id="header-background-video">
          <source src="./sources/header_background.mp4" type="video/mp4">
        </video>
        <div class="container-fluid row">
          <div class="col-md-1 col-lg-2"></div>
          <div class="col-md-5 col-lg-4">
            <h1 class="bars-title">
              Поддержка<br>сайтов на Drupal
            </h1>
            <div class="sub-title">
              Сопровождение и поддержка сайтов<br>
              на CMS Drupal любых версий и запущенности
            </div>
            <a href="#tariffes" class="rate-button">ТАРИФЫ</a>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="row redline-text-blocks">
              <div class="col-sm-4 col-6 redline-box">
                <div class="redline">
                  <div class="redline-title">
                    #1
                    <img src="./sources/cup.png" alt="#1">
                  </div>
                  <div class="redline-text">
                    Drupal-разработчик <br> в России по версии <br> Рейтинга Рунета
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-6 redline-box">
                <div class="redline">
                  <div class="redline-title">3+</div>
                  <div class="redline-text">
                    средний опыт <br> специалистов более<br> 3 лет
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-6 redline-box">
                <div class="redline">
                  <div class="redline-title">14</div>
                  <div class="redline-text">
                    лет опыта в сфере Drupal
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-6 redline-box">
                <div class="redline">
                  <div class="redline-title">50+</div>
                  <div class="redline-text">
                    модулей и тем <br> в формате DrupalGive
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-6 redline-box">
                <div class="redline">
                  <div class="redline-title">90 000</div>
                  <div class="redline-text">
                    часов поддержки <br> сайтов на Drupal
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-6 redline-box">
                <div class="redline">
                  <div class="redline-title">300+</div>
                  <div class="redline-text">
                    Проектов <br> на поддержке
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="main">
      <div class="" id="applied-competences">
        <div class="container">
          <div class="namer">13 лет совершенствуем <br class="d-lg-none"> компетенции <br class="d-none d-lg-inline">в Друпал <br class="d-lg-none"> поддержке!</div>
    
          <div class="coment">
            Разрабатываем и оптимизируем модули, расширяем <br class="d-lg-none"> функциональность сайтов, обновляем дизайн
          </div>
    
          <div class="row row-flex competencies-row">
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-1.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Добавление <br> информации на сайт,<br> создание новых <br> разделов
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-2.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Разработка <br> и оптимизация<br> модулей сайта
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-3.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Интеграция с CRM, <br> 1С, платежными <br> системами, любыми <br> веб-сервисами
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-4.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Любые доработки <br> функционала<br> и дизайна
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-5.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Аудит имониторинг<br> безопасности Drupal <br> сайтов
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-6.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Миграция, импорт <br> контента и апрейд<br> Drupal
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-7.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Оптимизация <br> и ускорение <br> Drupal-сайтов
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="competency"><img src="./sources/competency-8.svg" alt="comp"><img class="competences-img" src="./sources/icon.svg" alt="icon"></div>
              <div class="coment">
                Веб-маркетинг <br> консультации <br> и работы по SEO
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="" id="support-from-d-coder">
        <div class="namer naming">Поддержка от Drupal-coder</div>
        <div id="support-inner">
          <div class="row row-flex advantages-row">
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">01.</div>
                  <div class="advantage-title">Постановка задачи по Email</div>
                  <div class="coment">
                    Удобная и привычная модель постановки задач, при которой задачи фиксируются и никогда не теряются.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support1.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">02.</div>
                  <div class="advantage-title">Система Hilpdesk - отчётность, прозрачность</div>
                  <div class="coment">
                    Возможность посмотреть все заявки в работе и отработанные часы в личном кабинете через браузер.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support2.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">03.</div>
                  <div class="advantage-title">Расширенная техническая поддержка</div>
                  <div class="coment">
                    Возможность организации расширенной техподдержки с 6:00 до 22:00 без выходных.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support3.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">04.</div>
                  <div class="advantage-title">Персональный менеджер проекта</div>
                  <div class="coment">
                    Ваш менеджер проекта всегда в курсе текущего состояния проекта и в любой момент готов ответить на любые
                    вопросы.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support4.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">05.</div>
                  <div class="advantage-title">Удобные способы оплаты</div>
                  <div class="coment">
                    Безналичный расчёт или электронные деньги: WebMoney, Яндекс.Деньги, Paypal.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support5.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">06.</div>
                  <div class="advantage-title">Работаем с SLA и NDA</div>
                  <div class="coment">
                    Работа в рамках соглашений о конфинденциальности и обуровне качества работ.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support6.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">07.</div>
                  <div class="advantage-title">Штатные специалисты</div>
                  <div class="coment">
                    Надёжные штатные специалисты, никаких фрилансеров.
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support7.svg" alt="support"></div>
              </div>
            </div>
      
            <div class="col-xs-12 col-sm-6 col-lg-3 advantage-col">
              <div class="advantage">
                <div class="advantage-wrapper">
                  <div class="advantage-num">08.</div>
                  <div class="advantage-title">Удобные каналы связи</div>
                  <div class="coment">
                    Консультации по телефону, скайпу, в месенджерах
                  </div>
                </div>
                <div class="advantage-icon"><img style="position: absolute; z-index:-1; right: 0px; bottom: 0px;"
                    src="./sources/support8.svg" alt="support"></div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    
      <div class="" id="tariffes">
        <section id="block-tariffs">
          <h2 class="block-title">Тарифы</h2>
          <div class="tariffs-row">
            <div class="tariff-wrapper">
              <div class="tariff-header">
                <h3 class="tariff-title">Стартовый</h3>
              </div>
              <div class="tariff-body">
                <div class="tarrif-body-item">Разработка и поддержка Drupal</div>
                <div class="tarrif-body-item">2 часа предоплаты</div>
                <div class="tarrif-body-item">Оптимизация поискового движка</div>
                <div class="tarrif-body-item">Услуги дизайнера</div>
                <div class="tarrif-body-item">Стандартное время реакции</div>
                <div class="tarrif-body-item">Неиспользованные оплаченные часы переносятся на следующий месяц</div>
              </div>
              <div class="tariff-footer">
                <a href="#contacts" class="contact-form tariff-footer-btn">СВЯЖИТЕСЬ С НАМИ!</a>
              </div>
            </div>
            <div class="tariff-wrapper">
              <div class="tariff-header">
                <h3 class="tariff-title">Бизнес</h3>
              </div>
              <div class="tariff-body">
                <div class="tarrif-body-item">Разработка и поддержка Drupal</div>
                <div class="tarrif-body-item">10+ часов предоплаты в месяц</div>
                <div class="tarrif-body-item">Оптимизация поискового движка</div>
                <div class="tarrif-body-item">Услуги дизайнера</div>
                <div class="tarrif-body-item">Высокое время реакции - до 2 рабочих дней</div>
                <div class="tarrif-body-item">Неиспользованные оплаченные часы переносятся на следующий месяц</div>
              </div>
              <div class="tariff-footer">
                <a href="#contacts" class="contact-form tariff-footer-btn">СВЯЖИТЕСЬ С НАМИ!</a>
              </div>
            </div>
            <div class="tariff-wrapper">
              <div class="tariff-header">
                <h3 class="tariff-title">VIP</h3>
              </div>
              <div class="tariff-body">
                <div class="tarrif-body-item">Разработка и поддержка Drupal</div>
                <div class="tarrif-body-item">100+ часов предоплаты в месяц</div>
                <div class="tarrif-body-item">Оптимизация поискового движка</div>
                <div class="tarrif-body-item">Услуги дизайнера</div>
                <div class="tarrif-body-item">Максимальное время реакции - в день обращения</div>
                <div class="tarrif-body-item">Неиспользованные оплаченные часы переносятся на следующий месяц</div>
              </div>
              <div class="tariff-footer">
                <a href="#contacts" class="contact-form tariff-footer-btn">СВЯЖИТЕСЬ С НАМИ</a>
              </div>
            </div>
          </div>
          <div class="tariffs-ps">
            Вам не подходят наши тарифы? Оставьте заявку и мы предложим вам индивидуальые условия!
            <a href="#contacts" class="tariffs-link">ПОЛУЧИТЬ ИНДИВИДУАЛЬНЫЙ ТАРИФ</a>
          </div>
        </section>
      </div>
    
      <div class="" id="tasks">
        <h2 class="fw-bold m-2 text-center">
          Наши профессиональные <br class="d-none d-lg-inline d-xxl-none">разработчики <br class="d-none d-xxl-inline">выполняют <br class="d-none d-lg-inline d-xxl-none">быстро любые задачи
        </h2>
    
        <div class="container mx-0">
          <div class="row">
            <div class="mt-3 col-12 col-md-4 d-flex justify-content-center">
              <div class="max-w-180">
                <img src="./sources/competency-20.svg" alt="Событие GA" class="align-items-center d-block mx-auto">
                <h2 class="fw-bold mb-0 text-center">от 1ч</h2>
                <div class="text-center">Настройка события GA в интернет-магазине</div>
              </div>
            </div>
            <div class="mt-3 col-12 col-md-4 d-flex justify-content-center">
              <div class="max-w-180">
                <img src="./sources/competency-21.svg" alt="Мобильная версия" class="align-items-center d-block mx-auto">
                <h2 class="fw-bold mb-0 text-center">от 20ч</h2>
                <div class="text-center">Разработка мобильной версии сайта</div>
              </div>
            </div>
            <div class="mt-3 col-12 col-md-4 d-flex justify-content-center">
              <div class="max-w-180">
                <img src="./sources/competency-22.svg" alt="Оплата" class="align-items-center d-block mx-auto">
                <h2 class="fw-bold mb-0 text-center">от 8ч</h2>
                <div class="text-center">Интеграция модуля оплаты</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="" id="command">
        
    
        <section class="team">
          <div class="namer naming"><h2>Команда</h2></div>
          <div class="container">
            <div class="team-unit">
              <div class="row">
    
                <div class="col-6 col-sm-6 col-md-4 members-unit">
                  <div class="members-panel">
                    <div class="members-picture">
                      <img src="./sources/IMG1.jpg" alt="Фото члена команды" width="280" height="280"
                        class="pic-adaptive">
                    </div>
                    <div class="members-name">Сергей Синица</div>
                    <div class="members-function">Руководитель отдела веб-разработки, канд.техн. наук, заместитель
                      директора</div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 members-unit">
                  <div class="members-panel">
                    <div class="members-picture">
    
                      <img src="./sources/IMG2.jpg" alt="Фото члена команды" width="280" height="280"
                        class="pic-adaptive">
    
                    </div>
                    <div class="members-name">Роман Агабеков</div>
                    <div class="members-function">Руководитель отдела DevOPS, директор</div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 members-unit">
                  <div class="members-panel">
                    <div class="members-picture">
                      <img src="./sources/IMG3.jpg" alt="Фото члена команды" width="280" height="280"
                        class="pic-adaptive">
                    </div>
                    <div class="members-name">Алексей Синица</div>
                    <div class="members-function">Руководитель отдела поддержки сайтов</div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 members-unit">
                  <div class="members-panel">
                    <div class="members-picture">
                      <img src="./sources/IMG4.jpg" alt="Фото члена команды" width="280" height="280"
                        class="pic-adaptive">
                    </div>
                    <div class="members-name">Дарья Бочкарёва</div>
                    <div class="members-function">Руководитель отдела продвижения, контекстной рекламы и контент-поддержки
                      сайтов</div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 members-unit">
                  <div class="members-panel">
                    <div class="members-picture">
                      <img src="./sources/IMG5.jpg" alt="Фото члена команды" width="280" height="280"
                        class="pic-adaptive">
                    </div>
                    <div class="members-name">Ирина Торкунова</div>
                    <div class="members-function">Менеджер по работе с клиентами</div>
                  </div>
                </div>
              </div>
              <div class="all-team"><a href="">ВСЯ КОМАНДА</a></div>
            </div>
          </div>
        </section>
      </div>
    
      <div class="" id="last-cases">
        <section class="container last-cases" style="margin-top: 100px;">
          <h2>
            Последние кейсы
          </h2>

          <div class="last-cases-table">
            <a class="case-block" href="">
              <div class="case-pic" style="background-image: url(./sources/img/1.jpg);"></div>
              <h3>
                Настройка кэширования данных. Апгрейд сервера. Ускорение работы сайта в 30 раз!
              </h3>
              <div class="case-post-date">04.05.2020</div>
              <div class="case-text">Влияние скорости загрузки страниц сайта на отказы и конверсии. Кейс ускорения...
              </div>
            </a>
            <a class="case-block fullscreen-case" href="">
              <div class="case-pic" style="background-image: url(./sources/img/4.jpg)"></div>
              <h3>Использование отчетов Ecommerce в Яндекс.Метрике</h3>
            </a>
            <a class="case-block fullscreen-case" href="">
              <div class="case-pic" style="background-image: url(./sources/img/3.jpg)"></div>
              <h3>
                Повышение конверсии страницы с формой заявки с применением AB-тестирования
              </h3>
              <div class="case-post-date">24.01.2020</div>
            </a>
            <a class="case-block fullscreen-case" href="">
              <div class="case-pic" style="background-image: url(./sources/img/speed_case.jpg)"></div>
              <h3>
                Drupal 7: ускорение времени генерации страниц интернет-магазина на 32%
              </h3>
              <div class="case-post-date">23.09.2019</div>
            </a>
            <a class="case-block" href="">
              <div class="case-pic" style="background-image: url(./sources/img/monitor_case.png)"></div>
              <h3>
                Обмен товарами и заказами интернет-магазинов на Drupal 7 с 1C: Предприятие, МойСклад, Класс365
              </h3>
              <div class="case-post-date">22.08.2019</div>
              <div class="case-text">Опубликован <span class="case-href"> релиз модуля...</span></div>
            </a>
          </div>
        </section>
      </div>

      
      <div class="py-5"></div>
    
      <section id="testimonials">
    
        <h2 class="block-title">Отзывы</h2>
    
        <div class="form-group">
          <div class="content">
            <div class="slick" data-blazy="">
              <div id="slick-slider" class="slick-slider">
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/logo_0.png" width="78" height="46" alt="Ciel parfum">
                  </div>
                  <div class="report-text">
                    <div class="field-content">
                      Долгие поиски единственного и неповторимого мастера на многострадальный 
                      сайт www.cielparfum.com, который был собран крайне некомпетентным программистом 
                      и раз в месяц стабильно грозил погибнуть, привели меня на сайт и, в итоге, 
                      к ребятам из Drupal-coder. И вот уже практически полгода как не проходит и дня, 
                      чтобы я не поудивлялась и не порадовалась своему везению! Починили все, 
                      что не работало - от поиска до отображения меню. Провели редизайн - не отходя от желаемого, 
                      но со своими существенными и качественными дополнениями. Осуществили ряд проектов - конкурсы, 
                      тесты и тд. А уж мелких починок и доработок - не счесть! И главное - все качественно и быстро 
                      (не взирая на не самый "быстрый" тариф). Есть вопросы - замечательный Алексей всегда подскажет, 
                      поддержит, отремонтирует и/или просто сделает с нуля. Есть задумка для реализации - замечательный 
                      Сергей обсудит и предложит идеальный вариант. Есть проблема - замечательные Надежда 
                      и Роман починят, поправят, сделают! Ребята доказали, что эта CMS - мощная и грамотная 
                      система управления. Надеюсь, что наше сотрудничество затянется надолго! Спасибо!!!
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">С уважением, Наталья Сушкова руководитель Отдела веб-проектов
                       Группы компаний «Си Эль парфюм» 
                       <a href="http://www.cielparfum.com/">http://www.cielparfum.com/</a>
                    </div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/logo.png" width="113" height="46" alt="personal-writer.com">
                  </div>
                  <div class="report-text">
                    <div class="field-content">Сергей — профессиональный, высококвалифицированый программист 
                      с огромным опытом в ИТ. Я долгое время общался с топ-фрилансерами (вся первая двадцатка) 
                      на веблансере и могу сказать, что С СЕРГЕЕМ ОНИ И РЯДОМ НЕ ВАЛЯЛИСЬ. Работаем с Сергеем 
                      до сих пор. С ним приятно работать, я доволен. 
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">Сергей Чепурко, руководитель проекта&nbsp;<a
                        href="http://www.personal-writer.com/">www.personal-writer.com</a>&nbsp;/&nbsp;<a
                        href="http://www.writers-united.org/">www.writers-united.org</a></div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/farbors_ru.jpg" width="192" height="46" alt="farbors.ru">
                  </div>
                  <div class="report-text">
                    <div class="field-content">Выражаю глубочайшую благодарность команде специалистов 
                      компании "Инитлаб" и лично Дмитрию Купянскому и Алексею Синице. Сайт был первоклассно 
                      перевёрстан из старой табличной модели в новую на базе Drupal с дополнительной 
                      функциональностью. Всё было сделано с высочайшим качеством и точно в сроки. 
                      Всем кому хочется без нервов и лишних вопросов разработать сайт рекомендую 
                      обращаться именно к этой команде профессионалов.
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">Леонид Александрович Ледовский</div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/nashagazeta_ch.png" width="157" height="46"
                      alt="nashagazeta.ch">
                  </div>
                  <div class="report-text">
                    <div class="field-content">Моя электронная газета www.nashagazeta.ch существует 
                      в Швейцарии уже 10 лет. За это время мы сменили 7 специалистов по техподдержке, 
                      и только сейчас, в последние несколько месяцев, с начала сотрудничества с 
                      Алексеем Синицей и его командой, я впервые почувствовала, что у меня есть 
                      надежный технический тыл. Без громких слов и обещаний, ребята просто спокойно 
                      и качественно делают работу, быстро реагируют, находят решения, предлагают 
                      конкретные варианты улучшения функционирования сайта и сами их оперативно 
                      осуществляют. Сотрудничество с ними – одно удовольствие!
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">Надежда Сикорская, Женева, Швейцария</div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/logo-estee.png" width="99" height="46" alt="estee-design.ru">
                  </div>
                  <div class="report-text">
                    <div class="field-content">Наша компания Estee Design занимается дизайном интерьеров. 
                      Сайт сверстан на Drupal. Искали программистов под выполнение ряда небольших 
                      изменений и корректировок по сайту.
                      Пообщавшись с Алексеем Синицей, приняли решение о начале работ с компанией 
                      Initlab/drupal-coder. Сотрудничеством довольны на 100%. Четкая и понятная 
                      система коммуникации, достаточно оперативное решение по задачам. Дали рекомендации 
                      по улучшению програмной части сайта, исправили ряд скрытых ошибок.
                      Никогда не пишу отзывы (нет времени), но в данном случае, по просьбе Алексея, 
                      не могу не рекомендовать Initlab другим людям - действительно компания профессионалов.
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">Кузин Вадим, руководитель строительного направления 
                      Дизайн-бюро интерьеров Estee  <a href="http://estee-design.ru">estee-design.ru</a>
                    </div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/cableman_ru.png" width="200" height="41" alt="cableman.ru">
                  </div>
                  <div class="report-text">
                    <div class="field-content">Наша компания за несколько лет сменила несколько 
                      команд программистов и специалистов техподдержки, и почти отчаялась найти 
                      на российском рынке адекватное профессиональное предложение по разумной цене. 
                      Пока мы не начали работать с командой "Инитлаб", воплощающей в себе все наши 
                      представления о нормальной системе взаимодействия в сочетании с профессиональным 
                      неравнодушием. Впервые в моей деловой практике я чувствую надежно прикрытыми 
                      важнейшие задачи в жизни электронного СМИ, при том, что мои коллеги работают 
                      за сотни километров от нас и мы никогда не встречались лично.
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">Константин Бельский, зам. генерального директора портала
                      <a href="http://www.cableman.ru/">Кабельщик.ру</a>
                    </div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/logo_2.png" width="165" height="46" alt="www.serebro.ag">
                  </div>
                  <div class="report-text">
                    <div class="field-content">За довольно продолжительный срок (2014 - 2016 годы) 
                      весьма плотной работы (интернет-магазин на безумно замороченном Drupal 6: 
                      устраняли косяки разработчиков, ускоряли сайт, сделали множество новых функций и т.п.) 
                      - только самые добрые эмоции от работы с командой Initlab / Drupal-coder: 
                      всегда можно рассчитывать на быструю и толковую помощь, поддержку, совет. 
                      Даже сейчас, не смотря на то, что мы почти год не работали на постоянной основе 
                      (банально закончились задачи), случайно возникшая проблема с сайтом была решена мгновенно! В
                       общем, только самые искренние благодарности и рекомендации!
                      Спасибо! )
                      </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">С уважением, Владислав, <a href="http://serebro.ag">Serebro.Ag</a></div>
                  </div>
                </div>
    
                <div class="slick-slide">
                  <div class="logo">
                    <img loading="lazy" src="./sources/logos/lpcma_rus_v4.jpg" width="110" height="46"
                      alt="http://lpcma.tsu.ru/en">
                  </div>
                  <div class="report-text">
                    <div class="field-content">Хотел поблагодарить за работу над нашими сайтами.
                      За 4 месяца работы привели сайт в порядок, а самое главное получили инструмент, 
                      с помощью мы теперь можем быстро и красиво выставлять контент для образования и работы с предприятиями
                      http://lpcma.tsu.ru/ru/post/reference_material
                      Ну и многому научись благодаря работе с вами. Мы очень рады, что удалось найти настолько компетентных ребят )
                    </div>
                  </div>
                  <div class="report-author">
                    <div class="field-content">Дмитрий Новиков, <a href="http://lpcma.tsu.ru">lpcma.tsu.ru</a></div>
                  </div>
                </div>
    
              </div>
              <nav class="arrow">
                <div class="arrow-wrapper">
                  <button type="button" class="slick-prev" aria-label="Предыдущий">&lt;</button>
                  <span class="slide-num"></span>
                  <button type="button" class="slick-next" aria-label="Следующий">&gt;</button>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </section>
    
      <div class="py-5"></div>
    
      <div class="FAQ" id="FAQ">
        <h3> FAQ </h3>
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 1.</div>
              <h3 class="p-1 mb-1 mt-1"> Кто непосредственно занимается поддержкой?</h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 2.</div>
              <h3 class="p-1 mb-1 mt-1"> Как организована работа поддержки? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 3.</div>
              <h3 class="p-1 mb-1 mt-1"> Что происходит, когда отработаны все предоплаченные часы за месяц? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 4.</div>
              <h3 class="p-1 mb-1 mt-1"> Что происходит, когда не отработаны все предоплаченные часы за месяц? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 5.</div>
              <h3 class="p-1 mb-1 mt-1"> Как происходит оценка и согласование планируемого времени на выполнение заявок?
              </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 6.</div>
              <h3 class="p-1 mb-1 mt-1"> Сколько программистов выделяется на проект? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 7.</div>
              <h3 class="p-1 mb-1 mt-1"> Как подать заявку на внесение изменений на сайте? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 8.</div>
              <h3 class="p-1 mb-1 mt-1"> Как подать заявку на добавление пользователя, изменение настроек веб-сервера и
                других задач по администрированию? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 9.</div>
              <h3 class="p-1 mb-1 mt-1"> В течение какого времени начинается работа по заявке? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 10.</div>
              <h3 class="mb-1 mt-2"> В какое время работает поддержка? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 11.</div>
              <h3 class="mb-1 mt-2"> Подходят ли услуги поддержки, если необходимо произвести обновление ядра Drupal или
                модулей? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
    
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="accordion-num p-1 mb-1 mt-1"> 12.</div>
              <h3 class="mb-1 mt-2"> Можно ли пообщаться со специалистом голосом или в мессенджере? </h3>
            </div>
            <div class="accordion-content">
              <p>Сайты поддерживают штатные сотрудники ООО «Инитлаб», г.Краснодар, прошедшие специальное обучение и имеющие
                опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.
              </p>
            </div>
          </div>
        </div>
    
      </div>
    </div>


    <footer class="footer position-relative" id="contacts">
        <div class="footer-background"></div>
          
        <img src="./sources/footer-D-1.svg" alt="Декоративный элемент 1" class="footer-image image-1">
        <img src="./sources/footer-D-2.png" alt="Декоративный элемент 2" class="footer-image image-2">
    
        <div class="container">
            <div class="footer-content position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h2 class="footer-title">Оставить заявку</h2>
                    <h2 class="footer-title">на поддержку сайта</h2>
                    <p class="footer-description">
                        Срочно нужна поддержка сайта? Ваша команда не успевает справляться самостоятельно или предыдущий подрядчик не справился с работой?
                        Тогда вам точно к нам! Просто оставьте заявку и наш менеджер с вами свяжется!
                    </p>

                    <div class="d-flex align-items-center mt-4">
                        <div class="me-3">
                            <div class="d-flex align-items-center mb-2">
                                <img src="./sources/phone_icon.png" alt="Иконка телефона" class="icon-small me-2">
                                <p class="footer-contact mb-0"><a href="tel:+78002222673" class="text-white text-decoration-none">8 800 222-26-73</a></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="./sources/mail_icon.png" alt="Иконка email" class="icon-small me-2">
                                <p class="footer-contact mb-0"><a href="mailto:info@drupal-coder.ru" class="text-white text-decoration-line">info@drupal-coder.ru</a></p>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="col-lg-6 col-md-12">
                    <?php include("../form.php") ?>
                </div>
            </div>

            <hr class="footer-divider mt-5 mb-4">

            <div class="row">
                <div class="col-lg-12 d-flex align-items-center mb-2 social-icons">
                    <a href="https://vk.com" class="footer-icon me-3">
                        <img src="./sources/vk_icon.png" alt="VK" class="social-icon">
                    </a>
                    <a href="https://facebook.com" class="footer-icon me-3">
                        <img src="./sources/facebook_icon.png" alt="Facebook" class="social-icon">
                    </a>
                    <a href="https://youtube.com" class="footer-icon me-3">
                        <img src="./sources/youtube_icon.png" alt="YouTube" class="social-icon">
                    </a>
                    <a href="https://web.telegram.org" class="footer-icon me-3">
                        <img src="./sources/tg_icon.png" alt="Telegram" class="social-icon">
                    </a>
                </div>

                <div class="col-lg-12 mt-2">
                    <p class="footer-note mb-1">Проект ООО "Инитлаб", Краснодар, Россия.</p>
                    <p class="footer-note mb-1">Drupal является зарегистрированной торговой маркой Dries Buytaert.</p>
                </div>
            </div>
            </div>
        </div>
    </footer>

  </body>

</html>
 