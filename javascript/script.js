/// javascript test


if(document.getElementById("of").onclick ){
    var r = window.open("test.html","win1","width=420,height=320");
}


function checkin()
{
    /*
  var ch = document.getElementById("username");
    ch.value = ch.value + "vic";
    */
 
 /*   var c = document.getElementById("choice");

    if(c.selectedIndex === 0){

                v.setAttribute("class","tee2"); 
                
                return false;
    }
*/
/*
var c = document.getElementsByName("gender");

for(var i = 0; i<c.length; ++i){

        if(c[i].checked){
            return true;
        }
}

var ch  = document.getElementById("al");
ch.style.background = "rgb(197, 126, 126)";
return false;

 */

 var ch = document.getElementById("zip").value;
 
            var v = ch;
            var len = ch.length;

            for(var i = 0; i<len ; ++i){

                if(isNaN(parseInt(v[i]))){
                    alert(v[i]+" is not a number!");
                    return false;
                }
            }
            

           

        

 
}

function checkblock(){

var win = window.open("","","width=420,height=320");

if(win === null || typeof(win===undefined)){

alert("please disable your popup blocker!");

}
win.window.close();

}



    //forw();





var at = document.write(window.location.hash,"<br>");

///window.location.href = "http://127.0.0.1:5500/javascript/test.html";

var obj = {

    name: "victor",
    age: 12,
    year: "final"

};

var ch = "year" in obj;

document.write(obj.year,"<br>");
document.write("<hr>");

document.write(obj.hasOwnProperty("a"),"<br>");
for( var prop in obj){
    document.write(prop,"<br>");

}


document.write("<hr>");


function Obj(name,year,age) {

    this.name = name;
    this.year = year;
    this.age = age;

        Obj.prototype.set = false;

    this.getname = function(){
            document.write(this.name,"<br>");
    };
    
    this.getage = function(){
        document.write(this.age,"<br>");
};

this.getyear = function(){
    document.write(this.year,"<br>");
};

}

var p = new Obj("victor", "2019" , 20);

p.getname();
p.getyear();
document.write(p.set,"<br>");
/**
 *
 * 
 *  
 */


var c = document.getElementById("app");
var vv = document.createElement("p");

var vv1 = document.createTextNode("HI!!");

vv.appendChild(vv1); 
c.appendChild(vv);



var v = document.getElementById("test");
var o = v.hasAttribute("class");

if(!o){
  v.setAttribute("class","hidden");
}

o  = v.getAttribute("class");

document.write(o,"<hr>");

function hide(){

    var hd = document.getElementById("im");
    hd.className = "hidden";
}


function b4(idd,pic){

    var bb = document.getElementById(idd);
    bb.src = pic;   
}

function af(idd,pic){

    var aff = document.getElementById(idd);
    aff.src = pic;   
}

function fillcountry(){
   
    var zip = document.getElementById("zip").value;


    if(zip == "1234"){
    
        document.getElementById("country").value = "Nigeria";
    }
    
    else{
        document.getElementById("country").value = "invalid!";
    }

    }
     

    function newpara(){
        var pa = "The body is made up of differnet parts that combine to do certain functions!";

        document.getElementById('para').innerHTML = pa;
    }
var a = 1000;


document.write("<br>");

var s = "gamesvic";

var s_u = s.slice(0,1);
s_u = s_u.toUpperCase();

var s_l = s.slice(1);
s_l = s_l.toLowerCase();

s = s_u + s_l;            ///.............................

var date = new Date();

var days = ["SUN", "MON" , "TUE" , "WED" , "THURS", "FRI" ,"SAT"];

///alert("Today is : "+ days[get_day] +"!"); 

var dat = new Date("June 30, 2019");

//dat.setHours(12);

var cur_date = date.getDate(); 

var exp_date = dat.getDate();

document.write("we want : " + exp_date + " and we have : " + cur_date);

document.write("<br>");

var d1 = date.getDate();
var d2 =  dat.getDate();

if( d1 < d2 ){

var get = dat.getTime() - date.getTime();

get/=(1000*60*60*24);

document.write(get,"<br>");

}
