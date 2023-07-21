<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>regular</title>
</head>
<body>
    
@extends('navbar')
@section('content')

<div class="container">
    <br>
<!-- <button onclick="document.getElementById('mainimg').src='images/imran.jpg'">imran khan</button>
<img src="{{asset('images/q.jpg')}}" id="mainimg" height="200">
<button onclick="document.getElementById('mainimg').src='images/nawaz.jpg'">nawaz sharif</button> -->


<img src="{{asset('images/q.jpg')}}" id="mainimg" height="200" width="200">
<button onclick="imran()">imran khan</button>
<button onclick="nawaz()">nawaz sharif</button>

<br>

<form method="GET">
<input type="text" name="txtname"><br>
<button type="button" onclick="namefun(this.form)">submit</button>

<h1 id="showname"></h1>
</form>


<br><br>
<img src="{{asset('images/q.jpg')}}" height="300" width="400" id="mainimage" onmouseover="thumbnail(this.src)" ><br>
<img src="{{asset('images/q.jpg')}}" height="100" width="100" onmouseover="thumbnail(this.src)">
<img src="{{asset('images/n8.jpg')}}" height="100" width="100" onmouseover="thumbnail(this.src)">
<img src="{{asset('images/o1.jpg')}}" height="100" width="100" onmouseover="thumbnail(this.src)">
<img src="{{asset('images/img3.png')}}" height="100" width="100" onmouseover="thumbnail(this.src)">
</div>

<br>

@endsection
</body>
</html>
<script>
function namefun(form){
var uname=form.txtname.value;
document.getElementById("showname").innerHTML="<pre>"+uname+"</pre>";
}

function imran(){
document.getElementById("mainimg").src="images/imran.jpg";
}

function nawaz(){
document.getElementById("mainimg").src="images/nawaz.jpg";
}


function thumbnail(source){
document.getElementById("mainimage").src=source;
}
</script>