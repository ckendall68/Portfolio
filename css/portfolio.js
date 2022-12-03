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

var navItems = document.querySelectorAll(".nav-item");
for (var i = 0; i < navItems.length; i++) {
navItems[i].addEventListener("click", function() {
   this.classList.add("active");
   console.log(navItems[i]);
});
}
console.log(navItems);
