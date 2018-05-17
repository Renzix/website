function nav_open() {
    document.getElementById("main").style.marginLeft = "150px";
    document.getElementById("nav").style.width = "150px";
    document.getElementById("nav").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
}
function nav_close() {
   document.getElementById("main").style.marginLeft = "0";
   document.getElementById("nav").style.display = "none";
   document.getElementById("openNav").style.display = "inline-block";
}