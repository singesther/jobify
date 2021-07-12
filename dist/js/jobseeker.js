/*====== ACTIVE AND REMOVE ====*/
const navLink = document.querySelectorAll(".nav-link");
function linkAction() {
  /* ACTIVE LINK*/
  navLink.forEach((link) => link.classList.remove("active"));
  this.classList.add("active");
}
navLink.forEach((link) => link.addEventListener("click", linkAction));
