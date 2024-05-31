var swiper = new Swiper(".mySwiper", {
  autoplay: {
    delay: 3000,
    spaceBetween: 40,
    pauseOnMouseEnter: true
  },
  watchSlidesProgress: true,
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 3,
    },
    580: {
      slidesPerView: 4,
    },
    1424: {
      slidesPerView: 6,
    }
  }
});

// ! toggle fitler mobile
 const mobileFilter=document.querySelector(".mobile-filter");
 const mobileFilterContainer=document.querySelector(".mobile-filter-container");

 let isMobileFilterOpen=false;
  mobileFilter.addEventListener("click",(e)=>{
    isMobileFilterOpen=!isMobileFilterOpen;
    if (isMobileFilterOpen) {
      mobileFilterContainer.style.height=mobileFilterContainer.scrollHeight+"px";
      mobileFilterContainer.style.opacity="1";
    }
    else{
      mobileFilterContainer.style.height="0px";
      mobileFilterContainer.style.opacity="0";
    }

  })