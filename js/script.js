
var popup = document.getElementById('add-product-popup');
var addProductBtn = document.getElementById('add-product-btn');
var closePopupBtn = document.getElementById('close-popup-btn');

// When the user clicks the add product button, show the pop-up
addProductBtn.onclick = function() {
   popup.style.display = "flex"; // Show the modal
};

// When the user clicks the close button, hide the pop-up
closePopupBtn.onclick = function() {
   popup.style.display = "none"; // Hide the modal
};




// Get the elements




// When the user clicks anywhere outside the pop-up, hide it
window.onclick = function(event) {
   if (event.target == popup) {
      popup.style.display = "none";
   }
};

document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};



$('.sendButton').click( function() {
   $(".textBlock").toggleClass("reducetextBlock");
} );

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};



