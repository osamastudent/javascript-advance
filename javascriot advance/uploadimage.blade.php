<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="text" class="form-control" name="name" placeholder="name" id="name" onblur="blr()" onfocus="abc()"><br>
<input type="email" class="form-control" name="email" placeholder="email"><br>
<input type="password" class="form-control" name="pass" placeholder="pass"><br>
<!-- <input type="password" class="form-control" name="cpass" placeholder="confirm pass"><br> -->
<input type="file" class="form-control" id="input-image" name="userimage"><br>
<input type="submit" name="addusers">
</form>
<img src="" id="preview-image" height="200">

</body>
</html>
<script>
   var inputimg=document.getElementById("input-image");
    var previewimg=document.getElementById("preview-image");
    inputimg.addEventListener("change",function(event){
if(event.target.files.length==0){
return;
}
else{
    var tmpUrl=URL.createObjectURL(event.target.files[0]);
    previewimg.setAttribute("src",tmpUrl);
}
    });

    for(var a=1; a<=100; a=a+10){
for(var b=a; b<a+1; b++){
    document.write(" "+b);
}
document.write(" <br>");
}

</script>