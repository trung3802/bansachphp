let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

let videoBtn = document.querySelectorAll('.vid-btn');

const viewMoreButtons = document.querySelectorAll('.btn.card-open');
const cardCloseButtons = document.querySelectorAll('.card-close');
const cardWrappers = document.querySelectorAll('.card-wrapper');
const bodyElement = document.querySelector('body');


document.getElementById("login-btn").addEventListener("click", function () {
    document.getElementById("login-form-container").classList.add("active");
    document.getElementById("form-close-login").style.display = "block";
});

document.getElementById("signup-link").addEventListener("click", function () {
    document.getElementById("login-form-container").classList.remove("active");
    document.getElementById("signup-form-container").classList.add("active");
    document.getElementById("form-close-signup").style.display = "block";
    document.getElementById("form-close-login").style.display = "none";
});

document.getElementById("login-link").addEventListener("click", function () {
    document.getElementById("signup-form-container").classList.remove("active");
    document.getElementById("login-form-container").classList.add("active");
    document.getElementById("form-close-signup").style.display = "none";
    document.getElementById("form-close-login").style.display = "block";
});

document.getElementById("form-close-signup").addEventListener("click", function () {
    document.getElementById("signup-form-container").classList.remove("active");
    document.getElementById("form-close-signup").style.display = "none";
});

document.getElementById("form-close-login").addEventListener("click", function () {
    document.getElementById("login-form-container").classList.remove("active");
    document.getElementById("form-close-login").style.display = "none";
});


viewMoreButtons.forEach((button, index) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        cardWrappers[index].classList.add('active');
    });
});

cardCloseButtons.forEach((button, index) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        cardWrappers[index].classList.remove('active');
    });
});

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');

}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});



videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView:3,
        },
    },
});


cardWrappers.forEach((cardWrapper) => {
    const imgSelectItems = cardWrapper.querySelectorAll('.img-item');
    const imgDisplay = cardWrapper.querySelector('.img-display img');

    imgSelectItems.forEach((item) => {
        item.addEventListener('click', (event) => {
            event.preventDefault();
            const imgSrc = item.querySelector('img').getAttribute('src');
            imgDisplay.setAttribute('src', imgSrc);
        });
    });
});



