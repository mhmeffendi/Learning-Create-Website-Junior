/*let menu = document.querySelector("#menu-icon");
let navmenu = document.querySelector(".navmenu");*/
//var menu = document.getElementById(".navmenu");

//menu.addEventListener("click", function () {
//  menu.classList.toggle("open");
//});
/*menu.onclick = () => {
  menu.classList.toggle("bx-x");
  menu.classList.toggle("open");
};*/

// Mengambil elemen .navmenu
// Mengambil elemen .navmenu
//var navmenu = document.querySelector(".navmenu");

// Menambahkan event listener untuk click .navmenu
//navmenu.addEventListener("click", function () {
// Mengubah class .open dari .navmenu dengan metode toggle
//navmenu.classList.toggle("open");
//});

let menu = document.querySelector("#menu-icon");
let navmenu = document.querySelector(".navmenu");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navmenu.classList.toggle("open");
};
