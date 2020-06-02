<?php
$conn = mysqli_connect('114.71.71.235', 'hello', '123456789', 'test') or die('error connecting to mysql server');
$resultx=mysqli_query($conn,"SELECT g_code FROM Login WHERE name_emd='".$_POST['dname']."';");
$count=mysqli_num_rows($resultx);
$row2=mysqli_fetch_array($resultx);

    if($count==1){
              $results=mysqli_query($conn,"select fdust,UV,TEMP,WET,WFKOR,DATE_FORMAT(test_s.DATE,'%Y-%m-%d %H:%i') AS DATE,day from test_s,test_w
where day=0 and
DATE(test_s.DATE)=test_w.DATE and
test_w.HOUR-HOUR(test_s.DATE)>=0 and
test_w.HOUR-HOUR(test_s.DATE)<=3 and
test_w.g_code='".$row2['g_code']."' and
test_s.fdust!=0 order by DATE DESC limit 1");
$resultr=mysqli_query($conn,"select * from Login where name_emd='".$_POST['dname']."';");
   
        }
        else{
            echo "<script>alert('지역명을 제대로 입력하시오');location.replace('./login.php');</script>";
        }

$daten = date("Y-m-d H:i",time());
while($row1=mysqli_fetch_array($resultr)){
$asd21=$row1['rname']." ".$row1['name_s']." ".$row1['name_emd'];
}
while($row=mysqli_fetch_array($results)){
$fdust = $row['fdust'];
$temp1 = $row['TEMP'];
$uv1 = $row['UV'];
$wet1 = $row['WET'];
$wf1 = $row['WFKOR'];

}
echo "<script language='javascript'>
  window.setTimeout('window.location.reload()',60000);
</script>";
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Semicoloc </title>
    <style>
      #background1{
          position: absolute;
        display:table-cell;
       
        background-image:url(포토샵/goodday.png);
        top:0px;
        left: 0px;
        width: 1280px;
        height: 800px;
      }
      #logo{
          position: absolute;
        display:table-cell;
       
        top:0px;
        left: 2px;
        width: 150px;
        height: 80px;
      }
      #head{
        position: absolute;
        display:table-cell;
       
        background-image:url(포토샵/top.png);
        top:0px;
        left: 0px;
        width: 1280px;
        height: 80px;
      }
      #foot{
        position: absolute;
        display:table-cell;
        background-image:url(포토샵/bottom.png);
        top: 720px;
        left: 0px;
        width: 1280px;
        height: 80px;
      }
       #location3{
        position: absolute;
        display:table-cell;
        top:13px;
        left:35px;
        font-family:HCR Dotum;
        color:#e0e0e1;
        font-weight:bold;
        font-size:23px;
        letter-spacing: -0.08em;
        background-image:url(포토샵/shadow.png);
      }

      #mid{
        position: absolute;
        display:table-cell;
       
        top: 250px;
        left: 0px;
        width: 1280px;
        height: 300px;
      }
      #value1{           
        position: absolute;
        display:table-cell;
       
        top: 0px;
        left: 1040px;
        width: 102px;
        height: 80px;
      }
      #weather{
        position: absolute;
        display:table-cell;
   
        top: 0px;
        left: 920px;
        width: 120px;
        height: 80px;
      }
      #value2{
        position: absolute;
        display:table-cell;
       
        top: 0px;
        left: 1142px;
        width: 100px;
        height:80px;
      }
      #wetness{
        position: absolute;
        display:table-cell;
       
        top: 0px;
        left: 21px;
        width: 60px;
        height: 35px;
      }
        #wetness2{
        position: absolute;
        display:table-cell;
        top: 35px;
        left: 4px;
        width: 102px;
        height: 32px;
      }
      #wetness3{
        font-family:HCR Dotum;
        color:#e0e0e1;

        font-weight:bold;
        font-size:25px;
        letter-spacing: -0.08em;
      }
      #sun{
        position: absolute;
        display:table-cell;
       
        top: 0px;
        left: 10px;
        width: 80px;
        height: 35px;
        }
       #sun2{
        position: absolute;
        display:table-cell;
       
        text-align:center;
        top: 35px;
        left: 3px;
        width: 100px;
        height: 32px;
      }
      #sun3{
      font-family:HCR Dotum;
        color:#e0e0e1;
        font-weight:bold;
        font-size:25px;
        letter-spacing: -0.08em;
      }
      #picturevalue{
        position: absolute;
        display:table-cell;
   
        text-align:center;
        top: 170px;
        left: 440px;
        width: 400px;
        height:130px;
      }
      #value3{
        position: absolute;
        display:table-cell;
       
        top: 0px;
        left: 440px;
        width: 450px;
        height:170px;
      }
      #temperature{
        position: absolute;
        display:table-cell;
       
        left: 80px;
        top: 18px;
        width: 130px;
        height: 85px;
      }
       #temperature2{
        position: absolute;
        display:table-cell;
       

        left:200px;
        top: 0px;
        width: 155px;
        height: 85px;
      }
      #temperature3{
      font-family:HCR Dotum;
        color:#ffffff;
        font-weight:bold;
        font-size:60px;
        letter-spacing: -0.08em;
        background-image:url(포토샵/shadow.png);
      }
      #mise{
        position: absolute;
        display:table-cell;
       
        left: 0px;
        top: 95px;
        width: 200px;
        height: 85px;
      }

      #mise2{
        position: absolute;
        display:table-cell;
      
        text-align:left;
        left: 200px;
        top: 80px;
        width: 240px;
        height: 85px;
      }
      #mise3{
          font-family:HCR Dotum;
        color:#ffffff;
        font-weight:bold;
        font-size:60px;
        letter-spacing: -0.01em;
        background-image:url(포토샵/shadow.png);
      }
      }

      #date{
          position: absolute;
        display:table-cell;
       
        top:8px;
        left:824px;
        width: 450px;
        height:64px;
      }
      #place{ 
            position: absolute;
        display:table-cell;
        top:8px;
        left:6px;
        width: 550px;
        height:64px;
      }
      #clock3{
        position: absolute;
        display:table-cell;
      

        top:18px;
        left:1050px;
        font-family:HCR Dotum;
        color:#e0e0e1;
        font-weight:bold;
        font-size:30px;
        letter-spacing: -0.08em;
        background-image:url(포토샵/shadow.png);
      }
      #loading{
          position: absolute;
        display:table-cell;
               top:198px;
        left:615px;
      }
      #i1{
    position: absolute;
          }
      #i2{
    position: absolute;
          }
      #i3{
    position: absolute;
          }
      #i4{
    position: absolute;
          }

      .cycle{
        position: absolute;
        top:0px;
        left:0px;
      }
    </style>


</head>
<body onload="swap_q()">
<div class="all">
 <div class="canvas" id="background1" >

        <div id="loading">
          <img src="포토샵/loding.gif" width="57.5" height="55.5" border="0" alt="">
    </div>
 </div>

 <div id="head" >
     <div id="logo">
     <img src="포토샵/logo.png" width="160" height="79" border="0" alt="">
     </div>
     <div id="value1">
         <div id="wetness">
           <img src="포토샵/wetness.png" width="66" height="39" border="0" alt="">
     </div>
     <div align="center" id="wetness2">
           <b id="wetness3">
           </b>
           <img src="포토샵/wetnessn.png" width="23" height="23" border="0" alt="">
     </div>
     </div>
     <div id="value2">
         <div id="sun">
         <img src="포토샵/sun.png" width="80" height="39" border="0" alt="">
         </div>
         <div  id="sun2">
           <b id="sun3">
           </b>
           <img src="포토샵/sunn.png" width="50" height="23" border="0" alt="">
         </div>
     </div>
     <div id="weather">
      <img id="weather1""src="포토샵/cloud.png" width="135" height="80" border="0" alt="">
     </div>
 </div>
 <!-- 위치(place1),날짜(date1) -->
 <div id="foot">
   <div id="place">
   <img src="포토샵/location.png" width="29" height="47" border="0" alt="">
     <b id="location3">
     </b>
   </div>
   <div id="date">
     <b id="clock3">
     </b>
   </div>
 </div>

 <div id="mid">
   <div id="picturevalue">
<img id="picturevalue1" src="포토샵/gooddaypic.png" width="278" height="139" border="0" alt="">
   </div>

   <div id="value3">
      <div id="temperature">
        <img src="포토샵/temperature.png" width="116" height="53" border="0" alt="">
      </div>
      <div id="mise">
        <img src="포토샵/mise.png" width="196" height="54" border="0" alt="">
      </div>
      <div id="temperature2">
        <b id="temperature3">
        </b>
        <img src="포토샵/temperaturen.png" width="63" height="58" border="0" alt="">
      </div>
      <div id="mise2">
        <b id="mise3">
        </b>
        <img src="포토샵/misen.png" width="134" height="57" border="0" alt="">
      </div>
   </div>
 </div>
</div>
<div class="cycle" style="display:none">
    <video width="1280px" height="800px"src="mv/cdrink.mp4" id="i1" class="xxx" style="display:none" preload ></video>
    <video width="1280px" height="800px" src="mv/hdrink.mp4" id="i2" class="xxx" style="display:none"preload ></video>
    <video width="1280px" height="800px" src="mv/fan.mp4" id="i3" class="xxx" style="display:none"preload></video>
    <video width="1280px" height="800px"  src="mv/mask.mp4" id="i4" class="xxx" style="display:none"preload></video>
</div>
<script>
var _wetness;
var _temperature;
var _mise;
var _sun;
var _location;
var _state;
var _ampm;
var _weather; //1:맑음 2:구름낌 3:흐림 4:비 5:눈
_weather='<?=$wf1?>';
_wetness=parseInt('<?=$wet1?>');
_temperature=parseInt('<?=$temp1?>');
_mise=parseInt('<?=$fdust?>');
_sun=parseInt('<?=$uv1?>');
_location='<?=$asd21?>';
var aaa = document.getElementsByClassName("cycle");
var sss = document.getElementsByClassName("all");
var xxx1 = document.getElementsByClassName("xxx");
var i1 = document.getElementById('i1');
var i2 = document.getElementById('i2');
var i3 = document.getElementById('i3');
var i4 = document.getElementById('i4');

var i =0;
//-------------------------------------시계--------------------------------------//
var srv_time = "<?php print date("F d, Y H:i:s", time()); ?>";

var now = new Date(srv_time);
setInterval("server_time()", 1000);

function server_time()
{
    now.setSeconds(now.getSeconds()+1);
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    if (month < 10){
        month = "0" + month;
    }
    if (date < 10){
        date = "0" + date;
    }
    if (hours < 10){
        hours = "0" + hours;
    }
    if (minutes < 10){
        minutes = "0" + minutes;
    }
    if (seconds < 10){
        seconds = "0" + seconds;
    }
    document.getElementById("clock3").innerHTML = year + "-" + month + "-" + date + " " + hours + ":" + minutes;
    var clock = document.getElementById("clock3").innerHTML;
}
//------------------------------------------------------------------------------//

//날씨 배경이미지//
var backimage1=document.getElementById("background1");
if((_weather == "맑음" || _weather == "구름 조금" || _weather == "구름 많음")&& _mise<60){
backimage1.style.backgroundImage ="url(포토샵/goodday.png)";
}
else if((_weather == "맑음" || _weather == "구름 조금" || _weather == "구름 많음") && _mise>=60){
backimage1.style.backgroundImage ="url(포토샵/badday.png)";
}
else if(_weather =="비"){
backimage1.style.backgroundImage ="url(포토샵/rainny.png)";
}
else if(_weather =="눈"){
backimage1.style.backgroundImage ="url(포토샵/snowwy.png)";
}


//---------------------------------------------------------------------------------//

function changeimage(){
aaa[0].style.display="block";
sss[0].style.display="none";
}
window.setTimeout("changeimage()",12000);

setInterval(function next(){
    if(i==0){
        xxx1[0].style.display="block";
        xxx1[1].style.display="none";
        xxx1[2].style.display="none";
        xxx1[3].style.display="none";
        xxx1[0].Play();

        }
    if(i==1){
        xxx1[0].style.display="none";
        xxx1[1].style.display="block";
        xxx1[2].style.display="none";
        xxx1[3].style.display="none";
        xxx1[1].Play();
        }
    if(i==2){
        xxx1[0].style.display="none";
        xxx1[1].style.display="none";
        xxx1[2].style.display="block";
        xxx1[3].style.display="none";
        xxx1[2].Play();
        }
    if(i==3){
        xxx1[0].style.display="none";
        xxx1[1].style.display="none";
        xxx1[2].style.display="none";
        xxx1[3].style.display="block";
        xxx1[3].Play();
        i=0;
        }
    i++;
},12000);


//날씨 front이미지//
var image2=document.getElementById("weather1");
if(_weather =="맑음"){
image2.src ="포토샵/sunny.png";
}
else if(_weather =="구름 조금" ){
image2.src ="포토샵/soso.png";
}
else if( _weather=="구름 많음" ){
image2.src ="포토샵/cloud.png";
}
else if(_weather =="비"){
image2.src ="포토샵/rain.png";
}
else if(_weather =="눈"){
image2.src ="포토샵/snow.png";
}

var image1=document.getElementById("picturevalue1");
if(0<_mise&&_mise<30){
image1.src="포토샵/gooddaypic.png";
image1.width="278"
}
else if(30<=_mise&&_mise<60){
image1.src="포토샵/sosodaypic.png";
image1.width="265"
}
else if(60<=_mise&&_mise<150){
image1.src="포토샵/baddaypic.png";
image1.width="242"
}
else if(150<=_mise){
image1.src="포토샵/verybaddaypic.png";
image1.width="423"
}
var okAry = new Array;
var okindex = 0;
var oktop = 0;
function swap_q(){
 
    if (_weather=="비"){
        okAry[oktop]="mv/umbrella.mp4";
        oktop++;
    }
    if (_temperature>=26){
        okAry[oktop]="mv/cdrink.mp4";
        oktop++;
    }
    if (_temperature<=10){
        okAry[oktop]="mv/hdrink.mp4";
        oktop++;
    }
    if (_wetness<50){
        okAry[oktop]="mv/tears.mp4";
        oktop++;
    }
    if (_sun>5){
        okAry[oktop]="mv/suncream.mp4";
        oktop++;
    }
    if (_weather=="비"){
        okAry[oktop]="mv/raincoat.mp4";
        oktop++;
    }
    if (_mise>60){
        okAry[oktop]="mv/mask.mp4";
        oktop++;
    }
    if (_temperature>26){
        okAry[oktop]="mv/fan.mp4";
        oktop++;
    }
    if(oktop==0){
        for(a=0;a<4;a++){
            xxx1[a].src="mv/cdrink.mp4";
        }   
    }
    else{
 if(oktop>3){oktop=3;}

  for(a=0;a<4;a++){
   
    alert(okAry[okindex]);
    xxx1[a].src=okAry[okindex];   
   
    okindex++;
    if(okindex==oktop) {okindex=0;}
    }
 }
}

document.getElementById("mise3").innerHTML = _mise;
document.getElementById("temperature3").innerHTML = _temperature;
document.getElementById("wetness3").innerHTML = _wetness;
document.getElementById("sun3").innerHTML = _sun;
document.getElementById("location3").innerHTML =_location;



</script>
</body>


</html> 
