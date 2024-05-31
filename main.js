var swiper = new Swiper(".mySwiper", {
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true
  },
  watchSlidesProgress: true,
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    480: {
      slidesPerView: 3,
    },
    580: {
      slidesPerView: 4,
    },
    840: {
      slidesPerView: 5,
    },
    1424: {
      slidesPerView: 6,
    }
  }
});