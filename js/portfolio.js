//function showPage(page){
//  console.log("showPage");
//  const element = document.getElementById("about");
// console.log(page)
//  element.scrollIntoView();
window.open("https://ckendall68.github.io/Portfolio/about.html");
//window.open(page, "_self");
//window.open("https://www.google.com","_self")
//}

// function showPage(page) {
//   var link = page;
//  // var link = document.createElement("a")
// //  link.href = page; //"https://ckendall68.github.io/Portfolio/about.html"
//  // link.target = "_self"
//   //link.click()
// window.location.assign(link);
//
// var navItems = document.querySelectorAll(".nav-item");
// for (var i = 0; i < navItems.length; i++) {
// navItems[i].addEventListener("click", function() {
//    this.classList.add("active");
//    console.log(navItems[i]);
// });
// }
// console.log(navItems);

// Add active class to the current button (highlight it)
var navbar = document.getElementById("collapsibleNavbar");
var navLink = navbar.getElementsByClassName("nav-link");
for (var i = 0; i < navLink.length; i++) {
  navLink[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
