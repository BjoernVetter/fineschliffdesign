const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".main-navigation");
const hamburgerIcon = document.querySelector(".hamburger-icon");

if (hamburger && nav && hamburgerIcon) {
  const hamburgerSrc =
    "/wp-content/themes/fineschliffdesign/assets/icons/hamburger.svg";
  const closeSrc =
    "/wp-content/themes/fineschliffdesign/assets/icons/close.svg";

  hamburger.addEventListener("click", () => {
    nav.classList.toggle("active");

    if (nav.classList.contains("active")) {
      hamburgerIcon.src = closeSrc;
      hamburgerIcon.alt = "Menü schließen";
    } else {
      hamburgerIcon.src = hamburgerSrc;
      hamburgerIcon.alt = "Menü öffnen";
    }
  });
}
