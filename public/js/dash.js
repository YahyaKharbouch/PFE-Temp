// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
navigation.classList.toggle("active");
main.classList.toggle("active");
};

let button = document.querySelector(".dark-toggle");
button.onclick = function() {
document.body.classList.toggle("dark");
if (document.body.classList.contains("dark")) {
button.src = button.dataset.sun;
window.localStorage.setItem("dark", "true");
} else {
button.src = button.dataset.moon;
window.localStorage.setItem("dark", "false");
}
};

if (window.localStorage.getItem("dark") === "true") {
document.body.classList.add("dark");
} else {
document.body.classList.remove("dark");
}
