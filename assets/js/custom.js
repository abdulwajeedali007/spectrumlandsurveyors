// Services
$(document).ready(function () {
  $(".owl-carousel.services-carousel").owlCarousel({
    center: true,
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });
});
// Testimonials
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
  });
});

// removing contact form success or error message
const successLabel = document.getElementById("success-message");

setTimeout(() => {
  successLabel.remove();
}, 3000);

// year adding in footer
const year = new Date().getFullYear();
document.querySelector(".year").innerText = `© ${year}. | ALLRIGHTS RESERVED`;
