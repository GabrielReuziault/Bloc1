//function hello(){
//    alert("Hello World!");
//}

//const bouton = document.body.querySelector("Button");
//bouton.addEventListener("click",hello);
//alert("Hello World en JS");
//document.body.innerHTML ="<h1>Hello World en JS</h1>";
$ = function(id){
    return document.getElementById(id);
}
const bt=$("bt-Hello");

console.log(bt)

bt && bt.addEventListener("click", function(){
    alert("Hello !!!!!!!!");
});

$("bt-clear").addEventListener("click", function(){
    document.body.innerHTML="";

});

$("bt-dom").addEventListener("click", function(){
    debugger;
    const h2=document.createElement("h2");
    h2.innerText="Sous titre ajouté dynamiquement";
    $("content").append(h2);
    const img=
}
