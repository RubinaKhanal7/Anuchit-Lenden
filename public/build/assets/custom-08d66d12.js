var n=0,d=0;c(n);function c(s){document.getElementsByClassName("step");for(var e=document.getElementsByClassName("tab"),t=0;t<e.length;t++)e[t].style.display="none";e[s].style.display="block",s==0?document.getElementById("prevBtn").style.display="none":document.getElementById("prevBtn").style.display="inline",s==e.length-1?document.getElementById("nextBtn").innerHTML="Submit":document.getElementById("nextBtn").innerHTML="Next",m(s),n=s}function m(s){for(var e=document.getElementsByClassName("step"),t=0;t<e.length;t++)e[t].className=e[t].className.replace(" active",""),t<=d?(e[t].classList.add("filled"),e[t].classList.remove("unfilled")):(e[t].classList.remove("filled"),e[t].classList.add("unfilled"));e[s].classList.add("active")}var l=document.getElementsByClassName("step");for(var a=0;a<l.length;a++)l[a].addEventListener("click",function(){var s=Array.prototype.indexOf.call(l,this);s<=d&&c(s)});