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
  $(".owl-carousel.testimonials-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
  });
});

//Alternate Direction
$(document).ready(function () {
  $(".owl-carousel.services-slides").owlCarousel({
    loop: true,
    margin: 30,
    stagePadding: 2,
    smartSpeed: 2500,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 6,
      },
    },
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
