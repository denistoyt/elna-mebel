$(document).ready(function() {
    let cityBtn = $("#citys-select");
    let cityBtnSwitch = 0;
    cityBtn.on('click', function() {
        switch (cityBtnSwitch) {
            case 0:
                $(this).css({'background': 'white', 'color': '#DE2C29', 'padding': '0 16px 0 16px', 'border-top': '2px solid #DE2C29'});
                cityBtnSwitch = 1;
                break;
            case 1:
                $(this).css({'background': 'transparent', 'color': '#fff', 'border-top': 'none'});
                cityBtnSwitch = 0;
        }
    })
})
$(function(){
    $("#callInp").mask("+7 (999) 999 - 99 - 99");
});
// initialize swiper js
let swiper = new Swiper(".elnaMainSlider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: '.swiper-pagination'
    },
});
let mediaSlider = new Swiper(".elnaAboutCompany", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: '.media-pagination'
    },
});
let companyPartners = new Swiper(".elnaPartnersSlider", {
    slidesPerView: 8,
    spaceBetween: 50,
    loop: true
  });

