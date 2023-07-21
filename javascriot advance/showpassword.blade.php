<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
    .fas{
    padding-right: 25px;
    position: relative;
    margin-top: -25px;
    float: right;
    }
    /* .active{
      background-color: yellow !important;
    } */
    </style>
</head>
<body>
@extends('navbar')
@section('content')



<br><br><br>
 <div class="container">

   
<br><br>
   <form action="">
  <!-- <div class="input-group"> -->
   <input type="text" class="form-control"><br>
  <input type="password"  class="form-control" name="" id="password">
  <i class="fas fa-eye" id="togglePassword"></i>
  <!-- <i class="fas fa-eye-slash"></i> -->

<br>
<button type="button" class="btn btn-primary btn-outline-warning text-light"> Submit</button>
    </form>
  <!-- </div> -->


  <br><br>
  <input type="password" class="form-control" id="passwordInput">
<i id="eyeIcon" class="fas fa-eye"></i>

<br><br>

<br><br>

<ul class="nav nav-pills bg-warning">
  <li class="nav-item">
    <a class="nav-link  " data-bs-toggle="pill"  href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#about">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#contact">Contact Us</a>
  </li>
  
</ul>


<div class="tab-content py-3">
    <div class="tab-pane fade show active" id="home">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, beatae?
    </div>
    <div class="tab-pane fade " id="about">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod mollitia est earum deleniti saepe quo possimus harum nostrum sed assumenda.
    </div>
    <div class="tab-pane fade" id="contact">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora assumenda minima ut rem illo voluptatibus mollitia perferendis omnis at cum. Modi perferendis repellendus corrupti dolores, labore ab voluptatum? Fugiat, earum.
    </div>
</div>

</div>
</div>

@endsection
</body>
</html>

<script>
var pass=document.getElementById("passwordInput");
var eyeicon=document.getElementById("eyeIcon");
eyeicon.addEventListener("click",function(){
if(pass.type==='password')
{
pass.type='text';
this.classList.remove("fa-eye");
this.classList.add("fa-eye-slash");
}
else{
pass.type='password';
this.classList.remove("fa-eye-slash");
this.classList.add("fa-eye");
}
});
</script>


<!--
    <script>
  // Get the password input and eye icon elements
const passwordInput = document.getElementById('passwordInput');
const eyeIcon = document.getElementById('eyeIcon');

// Add click event listener to the eye icon
eyeIcon.addEventListener(
  'click', function() {
  if (passwordInput.type === 'password') {
    // Change the input type to "text" to show the password
    passwordInput.type = 'text';
    eyeIcon.classList.remove('fa-eye');
    eyeIcon.classList.add('fa-eye-slash');
  } else {
    // Change the input type back to "password" to hide the password
    passwordInput.type = 'password';
    eyeIcon.classList.remove('fa-eye-slash');
    eyeIcon.classList.add('fa-eye');
  }
});
 
</script> -->


<!-- 
<script>
const pass=document.getElementById("password");
const tpass=document.getElementById("togglePassword");
tpass.addEventListener("click",function(){
const type=pass.getAttribute('type')==='password' ? 'text' : 'password';
pass.setAttribute('type',type);
if(this.classList.contains('fa-eye')){
this.classList.remove("fa-eye");
this.classList.add("fa-eye-slash");
}
else{
this.classList.remove("fa-eye-slash");
this.classList.add("fa-eye");

}
});
</script> -->

