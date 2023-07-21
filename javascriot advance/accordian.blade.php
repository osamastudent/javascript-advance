<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accordian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
.btn{
background-color: lightblue;
width: 100%;
padding: 1px;
text-align: left;
border: blue solid 1px;
margin-top: 5px;
transition: 2.9s;
}


.q{
padding-top: 30px !important;
}
.active, .btn:hover{
background-color: blue;
color: white;

}
.main{
display: none;

}

#plus{
font-size: 30px;
padding-right: 10px;
padding-left: 10px !important;
background-color: skyblue;
position: relative;

width: 50px !important;
}
.q{
padding-top: 0px !important;
font-size: 30px;
}
.qd{
    display: inline;
    width: 20px !important;
}

.btn1{
width: 100%;
background-color: green;
color: white;
padding: 2px 2px 6px 2px;

margin-top: 5px;
}

.pakk{
font-size: 20px;
}

.active,.btn1:hover{
background-color: yellowgreen;
}

.main1{
display: none;
}

.fa-plus{
float: left !important;
margin-top: 5px;
margin-left: 10px;
background-color: greenyellow;
color: black;
border: greenyellow solid 0.1px;
font-size: 20px;
}


.fa-minus{
float: left !important;
margin-top: 6px;
margin-left: 10px;
font-size: 20px;
background-color: greenyellow;
color: black;
    border: greenyellow solid 0.1px;
}
    </style>
</head>
<body>
<!-- 03171105790 -->
<!-- 
<button class="btn">
    <span id="plus">+</span> <div class="qd"><span class="q" >pakistan</span></div>
</button> -->

<button class="btn">Question?
    <img src="{{asset('images/k1.jpg')}}" id="mid" height="20px">
</button>
<div class="main m">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ducimus deserunt maiores ea impedit laborum sit tenetur, quos aliquam, expedita delectus vitae. Vitae praesentium expedita, aspernatur nisi debitis eius maxime!</p>
</div>


<button class="btn">Question?
    <img src="{{asset('images/k1.jpg')}}" id="mid" height="20px">
</button>
<div class="main">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ducimus deserunt maiores ea impedit laborum sit tenetur, quos aliquam, expedita delectus vitae. Vitae praesentium expedita, aspernatur nisi debitis eius maxime!</p>
</div>


<button class="btn">Question?
    <img src="{{asset('images/k1.jpg')}}" id="mid" height="20px">
</button>
<div class="main">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ducimus deserunt maiores ea impedit laborum sit tenetur, quos aliquam, expedita delectus vitae. Vitae praesentium expedita, aspernatur nisi debitis eius maxime!</p>
</div>


<button class="btn">Question?
    <img src="{{asset('images/k1.jpg')}}" id="mid" height="20px">
</button>
<div class="main">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ducimus deserunt maiores ea impedit laborum sit tenetur, quos aliquam, expedita delectus vitae. Vitae praesentium expedita, aspernatur nisi debitis eius maxime!</p>
</div>








<button class="btn1"><span class="pakk">pamkistan</span> <i class="fa-solid fa-plus" id="pl"></i> </button>
<div class="main1" id="main1">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum consectetur debitis culpa optio rerum at! Debitis nemo inventore eius excepturi ipsum incidunt, ab est vel quidem dicta voluptate dolore dolor.
</div>

<!-- // font awesom plus minus -->

<button class="btn1"><span class="pakk">pamkistan</span> <i class="fa-solid fa-plus" id="pl"></i> </button>
<div class="main1" id="main1">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum consectetur debitis culpa optio rerum at! Debitis nemo inventore eius excepturi ipsum incidunt, ab est vel quidem dicta voluptate dolore dolor.
</div>



<button class="btn1"><span class="pakk">pamkistan</span> <i class="fa-solid fa-plus" id="pl"></i> </button>
<div class="main1" id="main1">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum consectetur debitis culpa optio rerum at! Debitis nemo inventore eius excepturi ipsum incidunt, ab est vel quidem dicta voluptate dolore dolor.
</div>

</body>
</html>
 <!-- font awesom plus minus -->
<script>
// font awesom plus minus
var acc=document.getElementsByClassName("btn1");

var a;
for(var a=0; a<acc.length; a++){
acc[a].addEventListener("click",function(){
this.classList.toggle("active");
var plus=document.getElementById("pl");
var show=this.nextElementSibling;
var plus=this.querySelector("#pl");
// / open one close other

for(var j=0; j<acc.length; j++){
if(acc[j]!=this){
acc[j].classList.remove("active");
acc[j].nextElementSibling.style.display="none";
acc[j].querySelector("#pl").classList.add("fa-plus");
}
}
if(show.style.display==="block"){
show.style.display="none";
plus.classList.add("fa-plus");
// plus.classList.remove("fa-minus");
}
else{
show.style.display="block";
plus.classList.remove("fa-plus");
plus.classList.add("fa-minus");
}
});
}
</script>








<!-- <script>
var acc=document.getElementsByClassName("btn");
var a=0;
// var imgg=document.getElementById("mid").src="images/k1.jpg";
for(var a=0; a<acc.length; a++){
acc[a].addEventListener("click",function(){
    this.classList.toggle("active");
var show=this.nextElementSibling;
var changeimg=this.querySelector("#mid");

// open one close other

for(var j=0; j<acc.length; j++){
if(acc[j]!=this){
acc[j].classList.remove("active");
acc[j].nextElementSibling.style.display="none";
acc[j].querySelector("#mid").src="images/k1.jpg";
}
}

if(show.style.display==="block"){
show.style.display="none";
// var imgg=document.getElementById("mid").src="images/k1.jpg";
changeimg.src="images/k1.jpg";
}
else{
    show.style.display="block";
   changeimg.src="images/k6.jpg";
    // var imgg=document.getElementById("mid").src="images/imran.jpg";
}
});
}
</script> -->

<!-- 
<script>

var d="-";
var f="+";
var acc=document.getElementsByClassName("btn");
var a;
for(var a=0; a<acc.length; a++){
acc[a].addEventListener("click",function(){
this.classList.toggle("active");
var c=document.getElementById("plus").innerHTML=f;
var show=this.nextElementSibling;
if(show.style.display==="block"){
show.style.display="none";
var c=document.getElementById("plus").innerHTML=f;
c.style.cssText="color:blue";
}
else{
show.style.display="block";
var c=document.getElementById("plus").innerHTML=d;
}
});
}
</script> -->

















<!-- <script>
var acc=document.getElementsByClassName("btn");
var a;
for(var a=0; a<acc.length; a++){
acc[a].addEventListener("click", function(){
this.classList.toggle("active");
var show= this.nextElementSibling;

if(show.style.display === "block"){
show.style.display="none";
}
else{
show.style.display="block";
}
});
}

</script> -->