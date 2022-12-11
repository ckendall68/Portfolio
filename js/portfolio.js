function showPage(page){
//  console.log("showPage");
  const element = document.getElementById("about");
// console.log(page)
  //element.scrollIntoView();
//window.open("https://ckendall68.github.io/Portfolio/about.html");
window.open(page, "_self");
//window.open("https://www.google.com","_self")
}

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
// var navbar = document.getElementById("collapsibleNavbar");
// var navLink = navbar.getElementsByClassName("nav-link");
// for (var i = 0; i < navLink.length; i++) {
//   navLink[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace("active", "");
//   this.className += " active";
//   });
// }
function displayModal(modalName, btnName, i){
  var mdl=modalName;
  var mdlBtn=btnName;
  var num=i;
  // Get the modal
  var modal = document.getElementById(mdl);

// Get the button that opens the modal
var btn = document.getElementById(mdlBtn);

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[num];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

}
