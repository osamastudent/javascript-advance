<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="/mycss.css">
  
    <title>Document</title>
</head>
<body>
  <h1 id="h">osama khan</h1>
<div class="navbar ">
<ul class="navbar nav">
  <li class="nav-item">
  <a href="/nav" class="nav-link" id="home">Home</a>
  </li>
  <li class="nav-item">
  <a href="/showpassword" class="nav-link" id="contact">Contact Us</a>
  </li>
  <li class="nav-item">
  <a href="/regular" class="nav-link" id="about">about Us</a>
  </li> 
</ul>
</div> 
<button class="btn btn-primary" id="btn"> one <i id="plus" class="fa fa-plus"></i></button>
<div class="main" id="main">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis, iure unde accusantium omnis asperiores fuga nisi dicta vitae voluptates labore, tempore explicabo minima ex quae dignissimos! Quaerat, accusamus eius?</p>
</div>

<span class="h1">osama</span>

<button class="btn btn-primary" id="btn"> one <i id="plus" class="fa fa-plus"></i></button>
<div class="main" id="main">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis, iure unde accusantium omnis asperiores fuga nisi dicta vitae voluptates labore, tempore explicabo minima ex quae dignissimos! Quaerat, accusamus eius?</p>
</div>


<button class="btn btn-primary" id="btn"> one <i id="plus" class="fa fa-plus"></i></button>
<div class="main" id="main">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis, iure unde accusantium omnis asperiores fuga nisi dicta vitae voluptates labore, tempore explicabo minima ex quae dignissimos! Quaerat, accusamus eius?</p>
</div>

<h1 id="loadd"></h1>
<h1 id="lo"></h1>
<!-- 
<div class="navbar bg-info text-dark">
<ul class="navbar nav">
  <li class="nav-item">
  <a href="/js" class="nav-link {{Request::is('js') ?'active' : ''}}" id="menu">Home</a>
  </li>
  <li class="nav-item">
  <a href="/showpassword" class="nav-link {{Request::is('showpassword')? 'active' : ''}}" id="menu">Contact Us</a>
  </li>
  <li class="nav-item">
  <a href="/regular" class="nav-link {{Request::is('regular')? 'active' : ''}}" id="menu">about Us</a>
  </li>
  
</ul>
</div> -->
@yield('content')


</body>
</html>
<script src="/myjs.js"></script>

<!-- <script>
    var active=document.getElementById("home");
active.addEventListener("click",function(){
  if(this.classList.contains("active")){
this.classList.remove("active");
console.log("yes applied successfully");
  }
});


  </script> -->