<!Doctype HTML>
<link href="css/style.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/cookielib/src/cookie.min.js"></script>
<html>
<title>test</title>
<?php 
include_once("connection.php");
?> 
<script>
var userName=getCookie("username");
var point=getCookie("points");
function randomInteger(min, max) {
let rand = min - 0.5 + Math.random() * (max - min + 1);
return Math.round(rand);
}
let arr = ["","","","","","","","",""];
function updatePoints(point)
{
    $.ajax({
            method:"post",
            url:"update.php",   
            type:'text',        
            data:{login:getCookie("login"),point:point}})
            .done (function()
            {
                })
}
function getUserInfo(){  
    if(getCookie("username")==null){
     document.getElementById('loginLable').innerHTML = 'Гость';
    }
    else
    {

        loginLable=document.getElementById('loginLable');
        pointsLabel=document.getElementById('pointLable');
        loginLable.innerText = userName +":";       
        pointsLabel.innerText = point;
  
}};
function resetButtons()
{
   
   for (var i = 0; i < 9; i++) 
   {
    document.getElementById(i).innerText = "";
    document.getElementById(i).disabled =false;
    arr=["","","","","","","","",""];
Xes=[];
   }
}

function disableButtons()
{
    for (var i = 0; i < 9; i++) 
   {
    document.getElementById(i).disabled =true;
   }
}



var id2="";
function getAnswer(id,Xes)
{if (Xes.length <5 ){
    $.ajax({
        method:"POST",
        datatype:"JSON",
        url:"botAnswer.php",
        async:false,
        data:{Xes:Xes.length,id:id}})
        .done(function(data){  
            arr[id]="X";
            var returneddata = JSON.parse(data);
            id2=returneddata.id2;
            element2= document.getElementById(id2);
            if (Xes.includes(parseInt(id2))==false&&element2.innerText!="O")
			{   
				element2.innerText="O";
                element2.disabled=true;
                arr[id2]="0";
			}
        else getAnswer(id,Xes);
        })
        .fail(function(){arr[id]="X";});
    } else arr[id]="X";
}
function checkGame(arr)
{
    $.ajax({
            method:"POST",
            url:"check.php",
            async:false,
            dataType:'text',
            data:{arr:arr}})
            .done (function(data)
            {
                if(data=="Победа за X!"&&data!="")
                {
                    swal("Игра окончена!",data);
                    point= parseInt(point,10)+1;
                    setCookie("points",point);
                    getUserInfo();
                    updatePoints(point);
                    disableButtons();

                }

                if(data=="Победа за О!"&&data!="")
                {
                    swal("Игра окончена!",data);
                    point= parseInt(point,10)-1;
                    if (point=="0") point=1;
                    setCookie("points",point);
                    getUserInfo();
                    updatePoints();
                    disableButtons();

                }
                if(data=="Ничья!"&&data!="")
                {
                    swal("Игра окончена!",data);
                    disableButtons();}
                })
}
</script>
<script>
var Xes=[];
$(function(){
    
    $(".field").on("click", function(){
        var id = $(this).attr("id");
        element = document.getElementById(id);
		element.innerText="X";
        element.disabled=true;
		Xes.push(parseInt(id,10));
		getAnswer(id,Xes);
        checkGame(arr);
        
            });
});


</script>

<script>
    $(function(){
    $(".headerbutton").on("click", function(){
        resetButtons();})
    });
</script>
	<head class="header">
    
<div class="wrapper">
    <div class="header">
    <button class="headerbutton"  name ="refreshButton">
    Играть ещё!
    </button>
    <a href="login_page.php">
    <button class="headerbutton" >
Войти
    </button>
    </a>  
    <a href="reg.php">
    <button class="headerbutton" >
Регистрация
    </button>
    </a>  
</div>
    </head>
    <main class="main">
		<body class="main_page">
            <div class="user_info">
            <label id="loginLable">Гость</label>
            <label id="pointLable"></label>
<script>
    getUserInfo();
</script>
            </div>
			<table class="table_class">               
				<tbody >
					<tr>
						<td><button class="field" id=0 value=" "></button></td>
						<td><button class="field" id=1 value=" "></button></td>
						<td><button class="field" id=2 value=" "></button></td>
					</tr>
					<tr>
						<td><button class="field" id=3 value=" "></button></td>
						<td><button class="field" id=4 value=" "></button></td>
						<td><button class="field" id=5 value=" "></button></td>
					</tr>
					<tr>
						<td><button class="field" id=6 value=" "></button></td>
						<td><button class="field" id=7 value=" "></button></td>
						<td><button class="field" id=8 value=" "></button></td>
					</tr>
				</tbody>
			</table>
</main>
</div>
		</body>
</html>
