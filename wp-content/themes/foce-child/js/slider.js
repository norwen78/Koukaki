
console.log("debut swiper");
var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 20,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 10,
      modifier: 1,
      slideShadows: false,
    },
  });
  console.log("fin swiper");