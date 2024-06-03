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
  // ! Routes
  const profile=document.querySelector("#profile");
  const cart=document.querySelector("#cart");
  profile.addEventListener("click",()=>
    location.href="./signin-signup.html"
  )
  cart.addEventListener("click",()=>{
    location.href="./cart.html"
  })

  // ! favorite 
  const favorite=document.querySelector("#favorite");
  const modal=document.querySelector("#modal")
  const backdrop=document.querySelector("#backdrop")
  favorite.addEventListener("click",()=>{
    modal.classList.add("show-modal")

  })
  backdrop.addEventListener("click",()=>{
    modal.classList.remove("show-modal")

  })