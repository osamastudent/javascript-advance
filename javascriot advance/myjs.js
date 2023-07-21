
// Get the navigation items
const homeNavItem = document.getElementById('home');
const contactNavItem = document.getElementById('contact');
const aboutNavItem = document.getElementById('about');

// Add event listener to determine the active navigation item
window.addEventListener('load', function() {
  const currentPath = location.pathname;

  if (currentPath === '/nav') {
    homeNavItem.classList.add('active');
  } else if (currentPath === '/showpassword') {
    contactNavItem.classList.add('active');
    
  }
  else if(currentPath==='/regular'){
    aboutNavItem.classList.add("active");
  }
});


var acc=document.getElementsByClassName("btn");
// var main=document.getElementById("main");
var a;
for(var a=0; a<acc.length; a++){
acc[a].addEventListener("click",function(){
this.classList.toggle("active");
var show=this.nextElementSibling;
var plus=this.querySelector("#plus");

for(var j=0; j<acc.length; j++){
  if(acc[j]!=this){
    acc[j].classList.remove("active");
  acc[j].nextElementSibling.style.display="none";
  acc[j].querySelector("#plus").classList.add("fa-plus");
  }
  }

  
if(show.style.display==="block"){
show.style.display="none";
plus.classList.add("fa-plus");
plus.classList.remove("fa-minus");
}
else{
  show.style.display="block";
plus.classList.remove("fa-plus");
plus.classList.add("fa-minus");
}

});
}

// window.addEventListener("load",function(){
// this.document.getElementById("loadd").innerText="kkkk";
// });

