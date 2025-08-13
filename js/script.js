const global = {
  currentPage: window.location.pathname,
};
//Highlight Active Lik
function highlightActiveLink() {
  const links = document.querySelectorAll(".nav-link");
  links.forEach((link) => {
    if (link.getAttribute("href") === global.currentPage) {
      link.classList.add("active");
    }
  });
}

function init() {
  switch (global.currentPage) {
    case "/":
    case "/index.html":
      console.log("Home");
    case "/movie-details.html":
      console.log("Movie details");

    case "/shows.html":
      console.log("shows");
    case "/search.html":
      console.log("Search");

    case "/tv-details.html":
      console.log("Tv Details");
  }
  highlightActiveLink();
}

document.addEventListener("DOMContentLoaded", init);
