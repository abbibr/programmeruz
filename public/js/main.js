var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 5,
      stretch: -65,
      depth: 300,
      modifier: 0.5,
      slideShadows: true,
    },
    loop: true,
    /* autoplay: {
        delay: 1000,
    } */
});