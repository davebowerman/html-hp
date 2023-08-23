
function myFunction() {
     var menu = document.getElementById("expanded");
     menu.classList.add("expand");
     var menu2 = document.getElementById("menu-btnn");
     menu2.classList.add("hidden");
     var menu3 = document.getElementById("expanded-x");
     menu3.classList.add("expand-ion-close-round");
}
function clickOff() {
     var reset = document.getElementById("expanded");
     reset.classList.remove("expand");
     var resetHamburger = document.getElementById("expanded-x");
     resetHamburger.classList.remove("expand-ion-close-round");
     var resetHamburger2 = document.getElementById("menu-btnn");
     resetHamburger2.classList.remove("hidden");

}
