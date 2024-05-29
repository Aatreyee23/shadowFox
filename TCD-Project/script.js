// Slide show 
let slideIndex = 1;
showSlides(slideIndex);
automaticSlide();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

function automaticSlide() {
  showSlides(++slideIndex); 
  setTimeout(automaticSlide, 5000); 
}

// Menu toggle functionality
let menuIcon = document.querySelector('.menu-icon');
let navBar = document.querySelector('.navBar');

if (menuIcon) { 
  menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navBar.classList.toggle('active');
  }
}

// Scroll Reveal (external library)
ScrollReveal({
  distance: '80px',
  duration: 2000,
  delay: 200,
});

ScrollReveal().reveal('.about_container, .about_content', { origin: 'bottom'});
ScrollReveal().reveal('.best_container, .best_card, .img1, .img2', { origin: 'left'});
ScrollReveal().reveal('.img3, .img4', { origin: 'right'});
ScrollReveal().reveal('.testimonials_container', { origin: 'bottom', interval: 200 });
ScrollReveal().reveal('.contact_container, .footer', { origin: 'bottom'});
