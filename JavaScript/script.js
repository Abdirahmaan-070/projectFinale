function toggleMenu() {
  document.querySelector(".mobile-menu").classList.toggle("active");
}

// menu.


document.querySelectorAll(".carousel-container").forEach(carouselContainer => {
  const nextBtn = carouselContainer.querySelector(".nextBtn");
  const prevBtn = carouselContainer.querySelector(".prevBtn");
  const carousel = carouselContainer.querySelector(".carousel");
  const cardWidth = carousel.querySelector(".card").offsetWidth;

  // Volgende knop
  nextBtn.onclick = () => {
    carousel.scrollLeft += cardWidth;
  };

  // Vorige knop
  prevBtn.onclick = () => {
    carousel.scrollLeft -= cardWidth;
  };
});

// button

function submitForm() {
  alert("Je reservering is succesvol verzonden! ✅");}


