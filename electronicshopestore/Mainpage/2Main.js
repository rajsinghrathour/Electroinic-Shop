
// Slider 

var a=document.getElementsByClassName("slider-img");
var index=0;

var arrow_left=document.querySelector(".left");
var arrow_right=document.querySelector(".right");


arrow_left.addEventListener("click",function(){

    index-=1;
    if(index==-1)
    {
        index=a.length-1;
    }

    show(index);

});

arrow_right.addEventListener("click",function(){

   

    index+=1;
    if(index==a.length){
        index=0;
    }
    show(index);
  

});





show(index);

function show(index){

    for(let i=0;i<a.length;i++){
          a[i].style.display="none";        
    }


    a[index].style.display="block";
}










