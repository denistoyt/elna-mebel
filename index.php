<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icn/logo.svg" type="image/x-icon">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/elna-font.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- BS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Elna Mebel</title>
</head>
<body>
    <!-- header -->
    <?require_once('components/header.php');?>
    <!-- left menu -->
    <?require_once('components/left-menu.php');?>
    <!-- page content -->
    <main>
        <!-- page second header -->
        <div class="container-fluid main_page__header__wrapper">
            <!-- left side -->
            <div class="col-auto main_page__header__left_side">
                <div class="main_page__header__left_side__about">
                    <a href="#">
                        <img src="icn/logo.svg" alt="Elna-Logo">
                    </a>
                    <span>Производство <br> корпусной мебели</span>
                </div>
                <div class="main_page__header__left_side__old">
                    <img src="icn/company-old.svg" alt="20 Years">
                    <span>Фабрика <br> основана в 1999г.</span>
                </div>
            </div>
            <!-- right side -->
            <div class="col main_page__header__right_side">
                <div class="col position-relative main_page__header__right_side__search__wrapper">
                    <input type="text" placeholder="Поиск по сайту" class="w-100 main_page__header__right_side__search-inp">
                    <button>
                        <span class="elna elna-search main_page__header__right_side__search-icn"></span>
                    </button>
                </div>
                <div class="col-auto justify-content-end main_page__header__right_side__menu__wrapper">
                    <div class="ps-0 main_page__header__menu_item">
                        <button>
                            <span class="elna elna-favourite"></span>
                            <span>25</span>
                        </button>
                    </div>
                    <div class="main_page__header__menu_item">
                        <button>
                            <span class="elna elna-pers-cabinet"></span>
                            <span class="elna elna-arrow-down"></span>
                        </button>
                    </div>
                    <div class="pe-0 main_page__header__menu_item">
                        <button>
                            <span class="elna elna-cart"></span>
                            <span>1</span>
                        </button>
                        /
                        <span class="w-100">755 000 ₽</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- media slider -->
        <div class="main_page__media__slider">
            <!-- slider -->
            <div class="swiper elnaMainSlider">
                <!-- soc media icons -->
                <div class="swiper__soc__wrapper">
                    <div class="swiper__soc__insta swiper__soc__icons">
                        <span class="elna elna-insta"></span>
                    </div>
                    <div class="swiper__soc__vk swiper__soc__icons">
                        <span class="elna elna-vk"></span>
                    </div>
                </div>
                <!-- slogan text -->
                <div class="swiper__items__about__wrapper">
                    <div class="swiper__items__about__slogan">
                        <h1 class="mb-0 swiper__items__about__title">Грани Земли</h1>
                        <p class="mb-0 swiper__items__about__description">Природность фактур в строгой геометрии.</p>
                    </div>
                    <button class="button-color swiper__items__about__button">
                        Подробнее
                        <span class="elna elna-arrow-forward"></span>
                    </button>
                </div>
                <!-- slides -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_1.png" alt="main page media slider content">
                    </div>
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_2.png" alt="main page media slider content">
                    </div>
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_3.png" alt="main page media slider content">
                    </div>
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_4.png" alt="main page media slider content">
                    </div>
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_5.png" alt="main page media slider content">
                    </div>
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_6.png" alt="main page media slider content">
                    </div>
                    <div class="swiper-slide main-slide">
                        <img src="img/main_page_slider_7.png" alt="main page media slider content">
                    </div>
                </div>
                <!-- nav -->
                <div class="swiper-button-prev swiper-nav-buttons">
                    <span class="elna elna-arrow-left"></span>
                </div>
                <div class="swiper-button-next swiper-nav-buttons">
                    <span class="elna elna-arrow-right"></span>
                </div>
                <!-- pagination -->
                <div class="d-flex align-items-center justify-content-center swiper-pagination"></div>
            </div>
        </div>
        <!-- company slogan -->
        <div class="container-fluid main_page__company__slogan">
            <div class="col company__slogan__item">
                <span class="elna elna-list-marker-sq marker-red company__slogan__item-marker"></span>
                <p class="mb-0 company__slogan__item-text">Большой выбор мебели. Всегда новые коллекции и модели. Возможность индивидуального изготовления.</p>
            </div>
            <div class="col company__slogan__item">
                <span class="elna elna-list-marker-sq marker-red company__slogan__item-marker"></span>
                <p class="mb-0 company__slogan__item-text">Разнообразие стилей и решений от профессиональных дизайнеров Elna mebel.</p>
            </div>
            <div class="col company__slogan__item">
                <span class="elna elna-list-marker-sq marker-red company__slogan__item-marker"></span>
                <p class="mb-0 company__slogan__item-text">Обширная география доставки и сотрудничества — вся Россия и СНГ</p>
            </div>
            <div class="col company__slogan__item">
                <span class="elna elna-list-marker-sq marker-red company__slogan__item-marker"></span>
                <p class="mb-0 company__slogan__item-text">Только безопасные и соверменные материалы изготовления</p>
            </div>
        </div>
        <!-- company services -->
        <div class="container-fluid main_page__company__services">
            <div class="col company__services__item">
                <img src="img/main_page_good_price.png" alt="Good Prices" class="company__services__item-img">
                <p class="company__services__item-text">Приятные цены без посредников, напрямую от производителя.</p>
                <button class="company__services__item-btn">
                    Каталог товаров
                    <span class="elna elna-arrow-right"></span>
                </button>
            </div>
            <div class="col company__services__item">
                <img src="img/main_page_advantages.png" alt="Good Conditions" class="company__services__item-img">
                <p class="company__services__item-text">Выгодные условия для оптовых клиентов, диллеров и партнеров. Изготовление уникальной мебели.</p>
                <button class="company__services__item-btn">
                    Условия
                    <span class="elna elna-arrow-right"></span>
                </button>
            </div>
            <div class="col company__services__item">
                <img src="img/main_page_designers.png" alt="Communicate" class="company__services__item-img">
                <p class="company__services__item-text">Сотрудничаем со строительными компаниями и студиями дизайна.</p>
                <button class="company__services__item-btn">
                    Связаться
                    <span class="elna elna-arrow-right"></span>
                </button>
            </div>
            <div class="col company__services__item">
                <img src="img/main_page_business.png" alt="Custom Requirements" class="company__services__item-img">
                <p class="company__services__item-text">Изготавливаем мебель под конкртеные требования для бизнеса и гос. учреждений.</p>
                <button class="company__services__item-btn">
                    Заявка
                    <span class="elna elna-arrow-right"></span>
                </button>
            </div>
        </div>
        <!-- serial mebel -->
        <div class="main_page__serial__mebel">
            <h2 class="serial__mebel__title">Серийная мебель</h2>
            <div class="serial__mebel__content__wrapper">
                <div class="serial__mebel__content__item">
                    <img src="icn/sale.svg" alt="Sale" width="96px">
                    <span class="serial__mebel__content__item-title">Распродажа</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-coupon-mebel serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Мебель по акции</span>
                </div>
                <div class="serial__mebel__content__item">
                    <img src="icn/soft-mebel.svg" alt="Soft Mebel" width="96px">
                    <span class="serial__mebel__content__item-title">Мягкая мебель</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-cab-shelving serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Шкафы и стеллажи</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-tables-stools serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Столы и стулья</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-cabinet-chest serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Тумбы и комоды</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-bedroom serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Спальня</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-kitchens serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Готовые кухни</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-home-office serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Домашний офис</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-hallways serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Прихожие</span>
                </div>
                <div class="serial__mebel__content__item">
                    <span class="elna elna-mebel-loft serial__mebel__content__item-icn"></span>
                    <span class="serial__mebel__content__item-title">Мебель лофт</span>
                </div>
                <div class="serial__mebel__content__item"><span class="elna elna-econom-mebel serial__mebel__content__item-icn"></span>
                <span class="serial__mebel__content__item-title">Мебель эконом-<br>класс</span>
            </div>
            </div>
        </div>
        <!-- catalog -->
        <div class="main_page__catalog">
            <h2 class="main_page__catalog__title">Все самое интересное</h2>
            <!-- content -->
            <div class="main_page__catalog_content">
                <ul class="nav nav-tabs container-fluid pe-0 main_page__catalog__selection_wrapper">
                    <li class="nav-item col">
                        <button class="nav-link active w-100 main_page__catalog__selection main_page__catalog__selection-news" data-bs-toggle="tab" data-bs-target=".main_page__catalog__items-news" aria-selected="true">Новинки</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__catalog__selection main_page__catalog__selection-sales" data-bs-toggle="tab" data-bs-target=".main_page__catalog__items-sales" aria-selected="false">Акции</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__catalog__selection main_page__catalog__selection-tops" data-bs-toggle="tab" data-bs-target=".main_page__catalog__items-top" aria-selected="false">Хиты</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__catalog__selection main_page__catalog__selection-seasons" data-bs-toggle="tab" data-bs-target=".main_page__catalog__items-season" aria-selected="false">Сезон</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- news catalog -->
                    <div class="tab-pane fade show active main_page__catalog__items main_page__catalog__items-news">
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_1_item_1.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>17 700 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_1_item_2.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>12 500 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_1_item_3.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>25 000 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_1_item_4.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>12 200 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_idea_item_1.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                                <div class="catalog__card__product_new">Новинка</div>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>21 900 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_2_item_1.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>12 200 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_2_item_2.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>17 700 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_2_item_3.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>12 500 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_2_item_4.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn catalog__card-favourite-active"></span>
                                </button>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>21 900 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                        <div class="main_page__catalog__items_card">
                            <div class="catalog__card__product_preview">
                                <img src="img/main_page_catalog_2_item_5.png" alt="elegant-12-tumb" class="catalog__card__product_preview_img">
                                <button class="catalog__card__product_preview-favourite">
                                    <span class="catalog__card__product_preview-favourite-icn"></span>
                                </button>
                                <div class="catalog__card__product_new">Новинка</div>
                            </div>
                            <span class="catalog__card__product_name">Тумба Элегант 12</span>
                            <span class="catalog__card__product_sizes">2100*570*400 (Фасады ЛДСП)</span>
                            <div class="catalog__card__product_price"><span>25 000 ₽</span><span>Розничная <br> цена</span></div>
                        </div>
                    </div>
                    <!-- sales catalog -->
                    <div class="tab-pane fade main_page__catalog__items main_page__catalog__items-sales">Content 2</div>
                    <!-- tops catalog -->
                    <div class="tab-pane fade main_page__catalog__items main_page__catalog__items-top">Content 3</div>
                    <!-- season catalog -->
                    <div class="tab-pane fade main_page__catalog__items main_page__catalog__items-season">Content 4</div>
                </div>
            </div>
            <!-- management options -->
            <div class="main_page__catalog_management">
                <button class="catalog_management-button catalog_management_show_more_btn"><span class="elna elna-plus"></span>Показать ещё</button>
                <div class="main_page__catalog_management-splitter"></div>
                <button class="catalog_management-button catalog_management_show_all"><span class="elna elna-arrow-forward"></span>Показать все</button>
            </div>
        </div>
        <!-- advantages -->
        <div class="container-fluid main_page__advantages">
            <div class="col main_page__advantages__item">
                <img src="img/main_page_individual_sizes.png" alt="individual sizes" class="advantages__item-img">
                <span class="advantages__item-slogan">Мебель по <br> индивидуальным <br> размерам</span>
                <p class="advantages__item-description">Заказывайте мебель из актуального <br> ассортимента под ваши размеры. Заказывайте уникальные решения по вашим проектам.</p>
                <button class="advantages__item-button">Оставить заявку<span class="elna elna-arrow-right"></span></button>
            </div>
            <div class="col main_page__advantages__item">
                <img src="img/main_page_3d.png" alt="online 3d constructor" class="advantages__item-img">
                <span class="advantages__item-slogan">Онлайн <br> 3D-конструктор <br> мебели</span>
                <p class="advantages__item-description">Создайте свой интерьер с уникальной <br> атмосферой из нашего каталога товаров.</p>
                <button class="advantages__item-button">Создать макет<span class="elna elna-arrow-right"></span></button>
            </div>
            <div class="col main_page__advantages__item">
                <img src="img/main_page_tech_task.png" alt="technical task" class="advantages__item-img" width="147px">
                <span class="advantages__item-slogan">У вас есть <br> техническое <br> задание?</span>
                <p class="advantages__item-description">Отправьте нам тех. задание или накладную с перечнем товара, мы рассчитаем стоимость и срок поставки, а также предложим <br> индивидуальные условия сотрудничества.</p>
                <button class="advantages__item-button">Оставить заявку<span class="elna elna-arrow-right"></span></button>
            </div>
        </div>
        <!-- interiers ideas -->
        <div class="main_page__interiers">
            <h2 class="interiers__title">Идеи для интерьеров</h2>
            <div class="main_page__interiers_catalog__content">
                <ul class="nav nav-tabs container-fluid pe-0 main_page__interiers_catalog_selection_wrapper">
                    <li class="nav-item col">
                        <button class="nav-link active w-100 main_page__interiers_catalog_selection" data-bs-toggle="tab" data-bs-target=".main_page__interiers_catalog-news" aria-selected="true">Новые</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__interiers_catalog_selection" data-bs-toggle="tab" data-bs-target=".main_page__interiers_catalog-child" aria-selected="false">Детская</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__interiers_catalog_selection" data-bs-toggle="tab" data-bs-target=".main_page__interiers_catalog-living_room" aria-selected="false">Гостиная</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__interiers_catalog_selection" data-bs-toggle="tab" data-bs-target=".main_page__interiers_catalog-bedroom" aria-selected="false">Спальня</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__interiers_catalog_selection" data-bs-toggle="tab" data-bs-target=".main_page__interiers_catalog-studia" aria-selected="false">Студия</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- news catalog -->
                    <div class="tab-pane fade show active main_page__interiers_catalog__item main_page__interiers_catalog-news">
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_1.png" alt="interier img 1" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_2.png" alt="interier img 2" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_3.png" alt="interier img 3" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_4.png" alt="interier img 4" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_5.png" alt="interier img 5" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_6.png" alt="interier img 6" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_7.png" alt="interier img 7" class="interiers_catalog-news_card_img">
                        </div>
                        <div class="interiers_catalog-news_card">
                            <img src="img/main_page_idea_item_8.png" alt="interier img 8" class="interiers_catalog-news_card_img">
                        </div>
                    </div>
                    <!-- child -->
                    <div class="tab-pane fade main_page__interiers_catalog__item main_page__interiers_catalog-child">
                        2
                    </div>
                    <!-- living room -->
                    <div class="tab-pane fade main_page__interiers_catalog__item main_page__interiers_catalog-living_room">
                        3
                    </div>
                    <!-- bedroom -->
                    <div class="tab-pane fade main_page__interiers_catalog__item main_page__interiers_catalog-bedroom">
                        4
                    </div>
                    <!-- studia -->
                    <div class="tab-pane fade main_page__interiers_catalog__item main_page__interiers_catalog-studia">
                        5
                    </div>
                </div>
            </div>
            <!-- interiers catalog management -->
            <div class="main_page__catalog_management">
                <button class="catalog_management-button catalog_management_show_more_btn"><span class="elna elna-plus"></span>Показать ещё</button>
                <div class="main_page__catalog_management-splitter"></div>
                <button class="catalog_management-button catalog_management_show_all"><span class="elna elna-arrow-forward"></span>Показать все</button>
            </div>
        </div>
        <!-- useful publications -->
        <div class="main_page__useful_publications">
            <h2 class="useful_publications__title">Полезные публикации</h2>
            <!-- content -->
            <div class="main_page__useful_publications_content">
                <ul class="nav nav-tabs container-fluid pe-0 main_page__useful_publications__selection_wrapper">
                    <li class="nav-item col">
                        <button class="nav-link active w-100 main_page__useful_publications__selection main_page__useful_publications__selection-all_publ" data-bs-toggle="tab" data-bs-target=".useful_publications__all_publ" aria-selected="true">Все публикации</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__useful_publications__selection main_page__useful_publications__selection-news" data-bs-toggle="tab" data-bs-target=".useful_publications__news" aria-selected="false">Новости</button>
                    </li>
                    <li class="nav-item col">
                        <button class="nav-link w-100 main_page__useful_publications__selection main_page__useful_publications__selection-publ" data-bs-toggle="tab" data-bs-target=".useful_publications__publ" aria-selected="false">Статьи</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- all publications -->
                    <div class="tab-pane fade show active useful_publications__cards useful_publications__all_publ">
                        <div class="nav-item useful_publication__cards_item">
                            <img src="img/main_page_publish_item_1.png" alt="publication img" class="useful_publications__cards_item-img">
                            <div class="useful_publications__cards_item-info">
                                <time class="useful_publications__cards_item-datetime">15 марта 2020</time>
                                <span class="useful_publications__cards_item-title">Достоинства эмалевой <br> мебели</span>
                                <p class="useful_publications__cards_item-description">Отделочные материалы и мебель <br> для кухни должны отличаться <br> устойчивостью к влажности <br> и загрязнениям</p>
                                <button class="useful_publications__cards_item-to_news_btn" >Новость</button>
                            </div>
                        </div>
                        <div class="useful_publication__cards_item">
                            <img src="img/main_page_publish_item_2.png" alt="publication img" class="useful_publications__cards_item-img">
                            <div class="useful_publications__cards_item-info">
                                <time class="useful_publications__cards_item-datetime">15 марта 2020</time>
                                <span class="useful_publications__cards_item-title">Разновидности шкафов</span>
                                <p class="mb-0 useful_publications__cards_item-description">Вряд ли получится найти более <br> функциональную, удобную <br> и вместительную систему для <br> хранения вещей, чем шкаф</p>
                                <button class="useful_publications__cards_item-to_news_btn">Новость</button>
                            </div>
                        </div>
                        <div class="useful_publication__cards_item">
                            <img src="img/main_page_publish_item_3.png" alt="publication img" class="useful_publications__cards_item-img">
                            <div class="nav-item useful_publications__cards_item-info">
                                <time class="useful_publications__cards_item-datetime">15 марта 2020</time>
                                <span class="useful_publications__cards_item-title">Как ухаживать за мебелью?</span>
                                <p class="mb-0 useful_publications__cards_item-description">Необходимо защищать кухонную <br> мебель от прямого воздействия <br> солнечного света в течение <br> продолжительного времени</p>
                                <button class="useful_publications__cards_item-to_news_btn" data-bs-target=".useful_publications__news" aria-selected="false">Новость</button>
                            </div>
                        </div>
                        <div class="useful_publication__cards_item">
                            <img src="img/main_page_publish_item_4.jfif" alt="publication img" class="useful_publications__cards_item-img">
                            <div class="useful_publications__cards_item-info">
                                <time class="useful_publications__cards_item-datetime">15 марта 2020</time>
                                <span class="useful_publications__cards_item-title">Что нужно знать при <br> выборе мебели?</span>
                                <p class="mb-0 useful_publications__cards_item-description">Создание интерьера в стиле <br> фьюжн требует незаурядного <br> дизайнерского мастерства, тонкого <br> вкуса и опыта</p>
                            </div>
                        </div>
                    </div>
                    <!-- news -->
                    <div class="tab-pane fade useful_publications__cards useful_publications__news">Контент "Новости"</div>
                    <!-- articles -->
                    <div class="tab-pane fade useful_publications__cards useful_publications__publ">Контент "Статьи"</div>
                </div>
            </div>
            <!-- management options -->
            <div class="main_page__catalog_management">
                <button class="catalog_management-button catalog_management_show_more_btn"><span class="elna elna-plus"></span>Показать ещё</button>
                <div class="main_page__catalog_management-splitter"></div>
                <button class="catalog_management-button catalog_management_show_all"><span class="elna elna-arrow-forward"></span>Показать все</button>
            </div>
        </div>
        <!-- about company -->
        <div class="ps-0 pe-0 container-fluid main_page__about_company">
            <div class="col col-xxl-auto about_company__info_wrapper">
                <a href="#" class="about_company__info-logo"><img src="icn/logo.svg" alt="elna logo"></a>
                <span class="about_company__info-slogan">Профессиональная команда дизайнеров, конструкторов, <br> технологов и менеджеров, влюбленных в красоту.</span>
                <p class="mb-0 about_company__info-description">Мы делаем мебель, меняющую ваше представление об удобстве <br> и функциональности. Исследуя рынок мебельного производства, мы в числе первых <br> внедряем интересные находки и изобретаем собственные инновации.</p>
                <button class="about_company__info-btn">Подробнее о нас<span class="elna elna-arrow-right"></span></button>
            </div>
            <!-- slider -->
            <div class="col col-xxl swiper elnaAboutCompany">
                <!-- slides -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                    <div class="swiper-slide about_company__slider-content">
                        <button class="about_company__slider-content-btn">
                            <span class="elna elna-arrow-right"></span>
                        </button>
                        <img src="img/about_company_media_slider.png" alt="about slider content">
                    </div>
                </div>
                <!-- nav -->
                <div class="swiper-button-prev swiper-nav-buttons">
                    <span class="elna elna-arrow-left"></span>
                </div>
                <div class="swiper-button-next swiper-nav-buttons">
                    <span class="elna elna-arrow-right"></span>
                </div>
                <!-- pagination -->
                <div class="d-flex align-items-center justify-content-center media-pagination"></div>
            </div>
        </div>
        <!-- company partners -->
        <div class="main_page__company_partners">
            <h2 class="company_partners__title">Наши партнеры</h2>
            <div class="company_partners__partners_logo">
                <!-- slider -->
                <div class="h-100 swiper elnaPartnersSlider">
                    <div class="swiper-wrapper partners__slider-container">
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos schock-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos kuppersberg-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos siemens-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos korting-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos aquafore-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos faber-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos schock-partner"></a>
                        </div>
                        <div class="swiper-slide d-flex align-items-center">
                            <a href="#" class="partners-logos kuppersberg-partner"></a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!-- company options -->
        <div class="main_page__company_options">
            <h2 class="company_options__title">Наши услуги</h2>
            <div class="container-fluid company_options__items_wrapper">
                <div class="company_options__items_card">
                    <span class="elna elna-order-mebel-96"></span>
                    <span class="company_options__items_card-name">Мебель на заказ по <br> индивидуальным <br> размерам</span>
                </div>
                <div class="company_options__items_card">
                    <span class="elna elna-credit-cashback"></span>
                    <span class="company_options__items_card-name">Кредит, кэшбек и <br> рассрочка</span>
                </div>
                <div class="company_options__items_card">
                    <span class="elna elna-place-sizes"></span>
                    <span class="company_options__items_card-name">Замер помещения</span>
                </div>
                <div class="company_options__items_card">
                    <span class="elna elna-mebel-assembling"></span>
                    <span class="company_options__items_card-name">Сборка мебели</span>
                </div>
                <div class="company_options__items_card">
                    <span class="elna elna-mebel-deliver"></span>
                    <span class="company_options__items_card-name">Доставка мебели</span>
                </div>
                <div class="company_options__items_card">
                    <span class="elna elna-3d-vision"></span>
                    <span class="company_options__items_card-name">3D визуализация</span>
                </div>
            </div>
        </div>
        <!-- clients comments -->
        <div class="main_page__clients_comments">
            <div class="clients_comments__header">
                <h2 class="clients_comments__header-title mb-0">Отзывы наших клиентов</h2>
                <button class="clients_comments__header_feedback-btn">
                    Оставить отзыв |
                    <span class="elna elna-pen"></span>
                </button>
            </div>
            <div class="clients_comments__content_wrapper">
                <!-- 1 -->
                <div class="clients_comments__content_item">
                    <button class="clients_comments__show-all-btn"><span class="elna elna-view"></span></button>
                    <div class="clients_comments__content_item_header">
                        <div class="d-flex flex-column">
                            <span class="clients_comments__content_item_us-name">Егор Николайченко</span>
                            <time class="clients_comments__content_item_comm-date">15 марта 2020</time>
                        </div>
                        <span class="clients_comments__content_item_us-avatar">
                            <img src="img/comments_photo-3.png" alt="user profile photo">
                        </span>
                    </div>
                    <div class="clients_comments__content_user_comment">
                        <p class="clients_comments__content_user_comment-text">Я сборщик мебели из Тамбовской области! Часто езжу в Кузнецк со своей начальницей и берём в ЭЛНА МЕБЕЛЬ продукцию! Не знаю как у других там со сборкой, но эта фабрика заслуживает 5+++. У меня одни положительные эмоции от ихней продукции! Часто езжу в Кузнецк со своей начальницей и берём в ЭЛНА МЕБЕЛЬ продукцию! Не знаю как у других там со сборкой, но эта фабрика заслуживает 5+++. У меня одни положительные эмоции от ихней продукции!</p>
                    </div>
                    <div class="clients_comments__content_feedback">
                        <div class="d-flex align-items-start clients_comments__content_feedback-header">
                            <span>Ответ</span>
                            <time class="clients_comments__content_feedback-feed-date">15 марта <br> 2020</time>
                        </div>
                        <div class="clients_comments__content_feedback_user_message">
                            <p class="clients_comments__content_feedback_user_message-text">Спасибо Вам за доверие, мы ценим мнение каждого клиента! Ждем вас в будущем.</p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="clients_comments__content_item">
                    <button class="clients_comments__show-all-btn"><span class="elna elna-view"></span></button>
                    <div class="clients_comments__content_item_header">
                        <div class="d-flex flex-column">
                            <span class="clients_comments__content_item_us-name">Кира Астафьева</span>
                            <time class="clients_comments__content_item_comm-date">15 марта 2020</time>
                        </div>
                        <span class="clients_comments__content_item_us-avatar">
                            <img src="img/comments_photo-1.png" alt="user profile photo">
                        </span>
                    </div>
                    <div class="clients_comments__content_user_comment">
                        <p class="clients_comments__content_user_comment-text">Приобретала Гостиную от этой фабрики. Очень все понравилось! Гостиная шикарная!!! Спасибо огромное!))))) всем рекомендую!</p>
                    </div>
                    <div class="clients_comments__content_feedback">
                        <div class="d-flex align-items-start clients_comments__content_feedback-header">
                            <span>Ответ</span>
                            <time class="clients_comments__content_feedback-feed-date">15 марта <br> 2020</time>
                        </div>
                        <div class="clients_comments__content_feedback_user_message">
                            <p class="clients_comments__content_feedback_user_message-text">Очень радны, что вам понравилось! Спасибо за отзыв.</p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="clients_comments__content_item">
                    <button class="clients_comments__show-all-btn"><span class="elna elna-view"></span></button>
                    <div class="clients_comments__content_item_header">
                        <div class="d-flex flex-column">
                            <span class="clients_comments__content_item_us-name">Рафаэль</span>
                            <time class="clients_comments__content_item_comm-date">15 марта 2020</time>
                        </div>
                        <span class="clients_comments__content_item_us-avatar">
                            <img src="img/comments_photo-3.png" alt="user profile photo">
                        </span>
                    </div>
                    <div class="clients_comments__content_user_comment">
                        <p class="clients_comments__content_user_comment-text">Заказал мебель себе домой. Кухню и шкаф. Очень красиво получилось. Довольны заказом. Я сборщик мебели из Тамбовской области! Часто езжу в Кузнецк со своей начальницей и берём в ЭЛНА МЕБЕЛЬ продукцию! Не знаю как у других там со сборкой, но эта фабрика заслуживает 5+++. У меня одни положительные эмоции от ихней продукции! Часто езжу в Кузнецк со своей начальницей и берём в ЭЛНА МЕБЕЛЬ продукцию! Не знаю как у других там со сборкой, но эта фабрика заслуживает 5+++. У меня одни положительные эмоции от ихней продукции!</p>
                    </div>
                    <div class="clients_comments__content_feedback">
                        <div class="d-flex align-items-start clients_comments__content_feedback-header">
                            <span>Ответ</span>
                            <time class="clients_comments__content_feedback-feed-date">15 марта <br> 2020</time>
                        </div>
                        <div class="clients_comments__content_feedback_user_message">
                            <p class="clients_comments__content_feedback_user_message-text">Спасибо Вам за доверие, мы ценим мнение каждого клиента! Ждем вас в будущем. Спасибо Вам за доверие, мы ценим мнение каждого клиента! Ждем вас в будущем.</p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="clients_comments__content_item">
                    <button class="clients_comments__show-all-btn"><span class="elna elna-view"></span></button>
                    <div class="clients_comments__content_item_header">
                        <div class="d-flex flex-column">
                            <span class="clients_comments__content_item_us-name">Кира Астафьева</span>
                            <time class="clients_comments__content_item_comm-date">15 марта 2020</time>
                        </div>
                        <span class="clients_comments__content_item_us-avatar">
                            <img src="img/comments_photo-2.png" alt="user profile photo">
                        </span>
                    </div>
                    <div class="clients_comments__content_user_comment">
                        <p class="clients_comments__content_user_comment-text">Приобретала Гостиную от этой фабрики. Очень все понравилось! Гостиная шикарная!!! Спасибо огромное!))))) всем рекомендую!</p>
                    </div>
                    <div class="clients_comments__content_feedback">
                        <div class="d-flex align-items-start clients_comments__content_feedback-header">
                            <span>Ответ</span>
                            <time class="clients_comments__content_feedback-feed-date">15 марта <br> 2020</time>
                        </div>
                        <div class="clients_comments__content_feedback_user_message">
                            <p class="clients_comments__content_feedback_user_message-text">Спасибо Вам за доверие, мы ценим мнение каждого клиента! Ждем вас в будущем.</p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="clients_comments__content_item">
                    <button class="clients_comments__show-all-btn"><span class="elna elna-view"></span></button>
                    <div class="clients_comments__content_item_header">
                        <div class="d-flex flex-column">
                            <span class="clients_comments__content_item_us-name">Рафаэль</span>
                            <time class="clients_comments__content_item_comm-date">15 марта 2020</time>
                        </div>
                        <span class="clients_comments__content_item_us-avatar">
                            <img src="img/comments_photo-3.png" alt="user profile photo">
                        </span>
                    </div>
                    <div class="clients_comments__content_user_comment">
                        <p class="clients_comments__content_user_comment-text">Нарушили сроки поставки. Я просил доставить заказ раньше, менеджер подтвердил, что доставят.</p>
                    </div>
                    <div class="clients_comments__content_feedback">
                        <div class="d-flex align-items-start clients_comments__content_feedback-header">
                            <span>Ответ</span>
                            <time class="clients_comments__content_feedback-feed-date">15 марта <br> 2020</time>
                        </div>
                        <div class="clients_comments__content_feedback_user_message">
                            <p class="clients_comments__content_feedback_user_message-text">Здравствуйте! Вы попросили доставить раньше ранее оговоренного срока поставки, менеджер пообщала сделать все возможное, чтобы ускорить производство</p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="clients_comments__content_item">
                    <button class="clients_comments__show-all-btn"><span class="elna elna-view"></span></button>
                    <div class="clients_comments__content_item_header">
                        <div class="d-flex flex-column">
                            <span class="clients_comments__content_item_us-name">Александр Старовойтов</span>
                            <time class="clients_comments__content_item_comm-date">15 марта 2020</time>
                        </div>
                        <span class="clients_comments__content_item_us-avatar">
                            <img src="img/comments_photo-3.png" alt="user profile photo">
                        </span>
                    </div>
                    <div class="clients_comments__content_user_comment">
                        <p class="clients_comments__content_user_comment-text">Заказывали кухонный гарнитур 20.03.17 года, все быстро и оперативно оформили. Качество на высшем уровне, Фасады с МДФ сделаны аккуратно по корпусам погрешностей нет, без сколов, столешница тоже порадовала. Выражаю благодарность</p>
                    </div>
                    <div class="clients_comments__content_feedback">
                        <div class="d-flex align-items-start clients_comments__content_feedback-header">
                            <span>Ответ</span>
                            <time class="clients_comments__content_feedback-feed-date">15 марта <br> 2020</time>
                        </div>
                        <div class="clients_comments__content_feedback_user_message">
                            <p class="clients_comments__content_feedback_user_message-text">Спасибо Вам за доверие, мы ценим мнение каждого клиента! Ждем вас в будущем.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?require_once('components/footer.php');?>
    <!-- custom js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/media.js"></script>
</body>
</html>