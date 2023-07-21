<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <!-- <style>
         .nav-link.active {
            background-color: black !important;
            color: white !important;
        }

        

        .tab-content {
            padding-top: 10px !important;
        }

    </style> -->
</head>
<body>
<ul class="nav nav-tabs bg-warning">
  <li class="nav-item">
    <a class="nav-link  active" data-bs-toggle="tab"  href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#about">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#contact">Contact Us</a>
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

<!-- @yield("content") -->
    

</body>
</html>