// toggle menuBar

let menuIcon= document.querySelector('#menu-icon');
let navBar = document.querySelector('.navBar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navBar.classList.toggle('active');
}

// Active Link section
let  sections = document.querySelectorAll('section');

let  navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top= window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });

    // sticky navbar

    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    //remove toggle and navbar when link is clicked
    menuIcon.classList.remove('bx-x');
    navBar.classList.remove('active');

};


// scroll-reveal

ScrollReveal({
    distance: '80px',
    duration: 2000,
    delay: 200,
    reset: true
});

ScrollReveal().reveal('.home-content, .heading', {origin: 'top'});
ScrollReveal().reveal('#devPic, .services-container, .portfolio-box, .contact form', {origin: 'bottom'});
ScrollReveal().reveal('.home-content h1, #aboutDevPic', {origin: 'left'});
ScrollReveal().reveal('.home-content p, .about-content', {origin: 'right'});
ScrollReveal().reveal('.skills-list', {origin: 'bottom', interval: 200});



// Typed Js

const typed=new Typed('.multiple-text', {
    strings: ['Web Developer', 'Author', 'Graphic Designer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay:1000,
    loop: true
});

//Automatic current year
document.addEventListener("DOMContentLoaded", function() {
    const yearElement = document.getElementById("year"); // Replace "year" with your element's ID
    if (yearElement) {
      yearElement.textContent = new Date().getFullYear();
    }
  });
