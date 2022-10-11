//Javascript
// let pelajar ={
//     nama : "Amirrul",
//     umur : 23,
//     ic   : "9234238943"
// }

// console.log(JSON.stringify(pelajar));

// AJAX
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function(){
//     if(xhr.readyState == 4 && xhr.status == 200){
//         let pelajar = JSON.parse(this.responseText);
//         console.log(pelajar);
//     }
// }

// xhr.open('GET','test.json',true);
// xhr.send();

//JQUERY
$.getJSON('test.json', function(data) {
    console.log(data);
});