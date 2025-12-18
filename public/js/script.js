function openRegister() {
    document.getElementById('registerPopup').style.display = 'flex';
}
function switchToLogin() {
    document.getElementById('registerPopup').style.display = 'none';
    document.getElementById('loginPopup').style.display = 'flex';
}
var swiper = new Swiper(".brand", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    pagination: {
        el: '.swiper-pagination',
      },
    autoplay: {
        delay:500
    },
    breakpoints: {
        500: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});




// ________________

const selected = document.querySelector('.select-selected');
const items = document.querySelector('.select-items');
const options = document.querySelectorAll('.select-items div');

selected.addEventListener('click', () => {
  items.style.display = items.style.display === 'block' ? 'none' : 'block';
});

options.forEach(option => {
  option.addEventListener('click', function () {
    selected.textContent = this.textContent;
    items.style.display = 'none';

    options.forEach(o => o.classList.remove('same-as-selected'));
    this.classList.add('same-as-selected');
  });
});