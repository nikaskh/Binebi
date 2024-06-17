
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(n) {
    slides.forEach(slide => slide.style.display = 'none');
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }
    slides[slideIndex].style.display = 'block';
}

function nextSlide() {
    showSlide(++slideIndex);
}

function prevSlide() {
    showSlide(--slideIndex);
}


setInterval(nextSlide, 3000);

showSlide(slideIndex);
