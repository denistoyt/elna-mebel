const media1240px = window.matchMedia('(max-width: 1280px)');
const media768px = window.matchMedia('(max-width: 768px)');
let collapsibleMenuBool = 0;
function windowSize1280(e) {
    if (e.matches) {
        // FOOTER
        $(".services__content").remove();
        $(".third__links__column").remove();
        $(".main__links__content").append('<li class="d-flex flex-column align-items-start footer-links-wrapper"><div><span class="elna elna-list-marker-cir"></span><a href="#">Услуги</a><span class="elna elna-arrow-forward"></span></div><ul class="footer-links ps-3 mb-0 d-flex flex-column"><li><a href="#">Мебель на заказ по индивидуальным размерам</a></li><li><a href="#">Кредит, кэшбек и рассрочка</a></li><li><a href="#">Замер помещения</a></li><li><a href="#">Сборка мебели</a></li><li><a href="#">Доставка мебели</a></li><li><a href="#">3D визуализация</a></li></ul></li>');
        $(".second__links__column").append('<li class="d-flex flex-column align-items-start footer-links-wrapper"><div><span class="elna elna-list-marker-cir"></span><a href="#">Оптовым партнерам</a><span class="elna elna-arrow-forward"></span></div><ul class="footer-links ps-3 mb-0 d-flex flex-column"><li><a href="#">Оптовый каталог</a></li><li><a href="#">Условия для партнеров</a></li><li><a href="#">Стать партнером</a></li><li><a href="#">Контакты</a></li></ul></li><li class="d-flex flex-column align-items-start footer-links-wrapper"><div><span class="elna elna-list-marker-cir"></span><a href="#">О компании</a><span class="elna elna-arrow-forward"></span></div><ul class="footer-links ps-3 mb-0 d-flex flex-column"><li><a href="#">Наши магазины</a></li><li><a href="#">Материалы</a></li><li><a href="#">Портфолио</a></li><li><a href="#">Сертификаты и <br>награды</a></li></ul></li>');
        // HEADER
        $(".header__left__side__city-change").remove();
        $(".header__left__side__city__selector").prepend("<span class='elna elna-city-place'></span>");
        $(".header__left__side__city").append('<li name="collapsible-container" class="h-100"></li>');
        $('[name="collapsible-container"]').append("<div class='h-100 header__left__side__collapsible__wrapper'><button class='d-flex h-100 header__left__side__collapsible-button'>Информация<span class='elna elna-arrow-down'></span></button><ul class='header__left__side__collapsible'></ul></div>");
        $('[name="collapsible-item"]').appendTo('.header__left__side__collapsible__wrapper ul');
        $('.header__left__side__collapsible').addClass("collapsible-inactive");
        $('.header__left__side__collapsible-button').on('click', function() {
            switch (collapsibleMenuBool) {
                case 0:
                    $(this).css({'background': 'white', 'color': '#DE2C29', 'padding': '0 16px 0 16px', 'border-top': '2px solid #DE2C29'});
                    $('.header__left__side__collapsible').addClass('collapsible-active').removeClass('collapsible-inactive');
                    collapsibleMenuBool = 1;
                    break;
                case 1:
                    $(this).css({'background': 'transparent', 'color': '#fff', 'border-top': 'none'});
                    $('.header__left__side__collapsible').addClass('collapsible-inactive').removeClass('collapsible-active');
                    collapsibleMenuBool = 0;
                    break;
            }
            
        })
    }
}
function windowSize768(e) {
    if(e.matches) {
        $('.footer__content').append('<div class="footer__content__site__links__wrapper"></div>');
        $('.footer__content__site_links').appendTo('.footer__content__site__links__wrapper');
    }
}
media768px.addListener(windowSize768);
media1240px.addListener(windowSize1280);
windowSize1280(media1240px);
windowSize768(media768px);
