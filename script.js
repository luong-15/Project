const swiper = new Swiper(".swiper", {
    autoplay: {
        depaly: 5000,
        disableOnInteraction: false,
    },
    grapCursor: true,
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
})