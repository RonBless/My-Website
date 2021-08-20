const bodyElement = document.querySelector('body')
const menuToggle = document.querySelector('.hambuger-menu')
const logoElement = document.querySelector('.logo')


menuToggle.addEventListener("click", function(){
    bodyElement.classList.toggle('is-open');
    logoElement.classList.add('is-open');

});

//Add eventListener to the window to close nav when we click on one of it's options or outside
window.addEventListener("click", function(e){
    let clickedElement = e.target;
    if(clickedElement.matches('.is-open') || clickedElement.matches('.nav-link')){
        bodyElement.classList.remove('is-open');
        logoElement.classList.remove('is-open');

    }
});



// Get the modal
var modal = document.querySelector('.contact');

// Get the button that opens the modal
var btn1 = document.querySelector(".cta-btn");
var btn2 = document.getElementById("contact_nav");


// Get the <span> element that closes the modal
var span = document.querySelector(".close_btn");



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

// When the user clicks on the button, open the modal
function modal_function(){
    modal.style.display = "block";
    return true;
}