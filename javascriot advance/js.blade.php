<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <style>
    /* Custom CSS to remove the outline */
    .form-control:focus {
      border: 3px solid green !important;
      box-shadow: none !important;
    }


    </style>
    <title>Document</title>
    
</head>
<body>
  @extends("navbar")
  @section("content")
  <div class="row">
  <div class="col-3">
    
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
  </div>

  <div class="col-9">
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
<br><br>



<!-- <h1><script>document.write(ok) </script></h1> -->
<div class="container" >
<form method="post" class="mt-5">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control form-select" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email"  oninput="getinput(this)" onfocus="getfocus(this)" onblur="getblur(this)" class="form-control form-select" id="email" aria-describedby="emailHelp">
    
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label ">Password</label>
    <input type="password" name="pass" class="form-control  form-select no-outline" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">  
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="button" onclick="data_submit(this.form)" class="btn btn-primary">Submit</button>

</form>



<!-- <p id="showw"></p> -->
<h1 id="e"></h1>
<h1 id="p"></h1>
<h1 id="insert"></h1>


</div>


@endsection

</body>
</html>