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

function closeShowPopup() {
    var element = document.getElementById("popup-ads");
    element.style.display = "none";
  }

document.getElementById("btn-phone").onclick = function () {
    document.getElementById("product-phone").style.display = 'block';
    document.getElementById("product-tv").style.display = 'none';
    document.getElementById("product-washing").style.display = 'none';
    document.getElementById("product-fridge").style.display = 'none';
    document.getElementById("product-accessory").style.display = 'none';
};
document.getElementById("btn-tv").onclick = function () {
    document.getElementById("product-phone").style.display = 'none';
    document.getElementById("product-tv").style.display = 'block';
    document.getElementById("product-washing").style.display = 'none';
    document.getElementById("product-fridge").style.display = 'none';
    document.getElementById("product-accessory").style.display = 'none';
};
document.getElementById("btn-washing").onclick = function () {
    document.getElementById("product-phone").style.display = 'none';
    document.getElementById("product-tv").style.display = 'none';
    document.getElementById("product-washing").style.display = 'block';
    document.getElementById("product-fridge").style.display = 'none';
    document.getElementById("product-accessory").style.display = 'none';
};
document.getElementById("btn-fridge").onclick = function () {
    document.getElementById("product-phone").style.display = 'none';
    document.getElementById("product-tv").style.display = 'none';
    document.getElementById("product-washing").style.display = 'none';
    document.getElementById("product-fridge").style.display = 'block';
    document.getElementById("product-accessory").style.display = 'none';
};
document.getElementById("btn-accessory").onclick = function () {
    document.getElementById("product-phone").style.display = 'none';
    document.getElementById("product-tv").style.display = 'none';
    document.getElementById("product-washing").style.display = 'none';
    document.getElementById("product-fridge").style.display = 'none';
    document.getElementById("product-accessory").style.display = 'block';
};