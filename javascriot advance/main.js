// // var tab=parseInt(prompt("table"));
// // var start=parseInt(prompt("start"));
// // var end=parseInt(prompt("end"));



// // if(start<end){
// //     for(var a=start; a<=end; a++){
// //         document.write(tab+ "x" +a+ "=" +a*tab+ " <br>");
// //     }
// //     }


// // if(start>end){
// // for(var a=start; a>=end; a++){
// //     document.write(tab+ "x" +a+ "=" +a*tab+ "<br>");
// // }
// // }

// // else{
// // for(var a=start; a<=end; a++){
// //     document.write(tab+ "x" +a+ "=" +a*tab+ "<br>");
// // }

// // }



// var start=parseInt(prompt("start"));
// var end=parseInt(prompt("end"));
// var sym=prompt("symbol");

// for(var a=start; a<=end; a++){
// for(var b=1; b<=a; b++){
//     document.write(sym);
// }
// document.write("<br>");
// }



// for(var a=end; a>=start; a--){
//     for(var b=1; b<=a; b++){
//         document.write(sym);
//     }
//     document.write("<br>");
//     }


function data_submit(form){
var email="osama@gmail.com";
var password="123";
document.getElementById("e").style.cssText="color:yellow; text-align:center; background-color:blue";

var uemail=form.email.value;
var upass=form.pass.value;
if(email==uemail){
if(password==upass){
document.write("<h1>welcome to osama</h1>");
  
}
else{
    document.getElementById("p").innerHTML=upass;
}
}
else{
    document.getElementById("e").innerHTML=uemail;
}
}


// document.getElementById("showw").innerHTML=uemail+" <br> pass: "+ upass;