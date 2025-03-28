// hamburger menu
let hamburger = document.getElementById('hamburger')

function hamburgerMenu() {
    let menu = document.getElementById("navagationH");
    if (menu.style.display === "flex") {
      menu.style.transition = "0.5s ease-in";
      menu.style.height = "0vh";
      menu.style.display = "none";
      
    } else {
      menu.style.transition = "0.5s ease-in";
      menu.style.display = "flex";
      menu.style.height = "50vh";
    }
  }

// hover over navagation makes the things grow

navagationItems = document.getElementsByClassName('navagation');
function navGrow(buttonId) {
  document.getElementById(buttonId).style.transition = ".2s"
  document.getElementById(buttonId).style.fontSize = "1.3rem";
}

function navUnGrow(buttonId) {
  document.getElementById(buttonId).style.transition = ".2s"
  document.getElementById(buttonId).style.fontSize = "1rem";
}