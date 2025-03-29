function toggleText(button) {
  const vacature = button.closest(".vacture");
  const extraText = vacature.querySelector(".hidden-text");

  if (vacature.classList.contains("expanded")) {
    extraText.style.display = "none"; 
    vacature.classList.remove("expanded");
    button.textContent = "Lees Meer";
  } else {
    extraText.style.display = "block";
    vacature.classList.add("expanded");
    button.textContent = "Lees Minder";
  }
}
