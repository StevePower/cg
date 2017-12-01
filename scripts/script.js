// This is our general JavaScript file
var sliderIndex = 0;
mySlider();

function mySlider() {
    var i;
    var x = document.getElementsByClassName("cg-slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    sliderIndex++;
    if (sliderIndex > x.length) {sliderIndex = 1}    
    x[sliderIndex-1].style.display = "block";  
    setTimeout(mySlider, 3500);    
}

// toggle menu on small screens
function toggleMenu() {
    var x = document.getElementById("smallNav");
    if (x.className.indexOf("cg-show") == -1) {
        x.className += " cg-show";
    } else { 
        x.className = x.className.replace(" cg-show", "");
    }
}

// close modal if click outside of modal
var modal = document.getElementById('modalWindow');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}