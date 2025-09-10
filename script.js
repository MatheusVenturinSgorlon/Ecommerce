document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prev = document.querySelector('.prev');
  const next = document.querySelector('.next');
  const totalSlides = slides.length;
  let currentIndex = 0;

  function showSlide(index) {
    currentIndex = (index + totalSlides) % totalSlides; 
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  next.addEventListener('click', () => {
    showSlide(currentIndex + 1);
  });

  prev.addEventListener('click', () => {
    showSlide(currentIndex - 1);
  });
});


