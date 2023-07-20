var typed = new Typed(".changeattribute", {
  strings:["Programmer.","Web Engineer.","UI/UX Designer."],
  typespeed: 100,
  backspeed: 50,
  loop:true
});


const menu=document.querySelector('.bars')
const navoptions=document.querySelector('.list')

menu.addEventListener('click', ()=>{
  navoptions.classList.toggle('mobile-menu')
});


var myVar;
      
      function myFunction() {
        myVar = setTimeout(PageLoader, 3000);
      }
      
      function PageLoader() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("mydiv").style.display = "block";
      }


const toggleButton = document.getElementsByClassName('toggle')[0];
const navbarLinks = document.getElementsByClassName('links');
toggleButton.addEventListener('click', function() {
for(var i=0; i<navbarLinks.length; i++)
navbarLinks[i].classList.toggle('active');
});