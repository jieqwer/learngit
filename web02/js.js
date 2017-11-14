var nav=document.getElementById("nav");
var li=nav.getElementsByTagName("li");
var nav_bg=nav.querySelector("div");

var content=document.getElementById("content");

var parent=document.getElementById("parent");
var img=parent.querySelector(".img");
var text=parent.querySelector(".text");

var parent1=document.getElementById("parent1");
var load01= parent1.querySelector("ul>li>div>.load01");
var load02= parent1.querySelector("ul>li>div>.load02");
var load03= parent1.querySelector("ul>li>div>.load03");
var load04= parent1.querySelector("ul>li>div>.load04");
var load05= parent1.querySelector("ul>li>div>.load05");

var content2=document.getElementById("content2");
var span1=content2.querySelector(".top1>span");
var span2=content2.querySelector(".top2>span");
for(var i=0;i<li.length;i++){
    var tli=li[i];
    tli.index=i;
        tli.onclick=function(){
            nav_bg.style.left=200*this.index+"px";

            content.style.marginLeft=-1000*this.index+"px";
//执行点击后触发动画
            img.style.animation="left_move 0.5s linear";
            img.style.opacity=1;
            /*     img.style.animationName="left_move";
                 img.style.animationDuration=3+"s";
                 img.style.animationTimingFunction="linear";*/
            text.style.animation="bottom_move 0.5s linear";
            text.style.opacity=1;

            if(this.index==1){
               load01.style.animation="login1 2s linear";
                load02.style.animation="login2 2s linear";
                load03.style.animation="login3 2s linear";
                load04.style.animation="login4 2s linear";
                load05.style.animation="login5 2s linear";
            }
            if(this.index==3){
                span1.style.animation="dong_move 0.7s linear";
                span2.style.animation="dong_move 1s linear";
            }

        }

 /*

 console.log("")打印显示
 if(tli.index==0){
        tli.onclick=function(){
            nav_bg.style.left=190*0+"px"
        }
    }>
    else if(tli.index==1){
        tli.onclick=function(){
            nav_bg.style.left=190*1+"px"
        }
    }
    else if(tli.index==2){
        tli.onclick=function(){
            nav_bg.style.left=190*2+"px"
        }
    }
    else if(tli.index==3){
        tli.onclick=function(){
            nav_bg.style.left=190*3+"px"
        }
    }
    else if(tli.index==4){
        tli.onclick=function(){
            nav_bg.style.left=190*4+"px"
        }
    }
*/
}
var text1=document.getElementById("text1").value;
var finer=document.getElementById("finer");
var input=finer.querySelector("input");

window.onload=function validate(){
    if(text1!=""){
       input.style.borderBottom="1px solid green"
    }
    else {
        input.style.borderBottom="1px solid red"
    }
}
var shoppingBtn = document.getElementById("shopping");
var shoppingBox = document.getElementById("shopping_box");
var close = document.getElementById("close");

shoppingBtn.onclick  =function () {
    shoppingBox.style.transform  = "scale(1)";
};
close.onclick = function () {
    shoppingBox.style.transform  = "scale(0)";
};