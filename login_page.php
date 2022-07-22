<html>
<title>

</title>
<head>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script>
$(function(){
    var tmp;
    $(".btn.btn-primary").on("click", function(){
         login= document.getElementById("Login");
         password= document.getElementById("Password");
        $.ajax({
            method:"post",
            url:"log.php",   
            type:'json',        
            data:{login:login.value,password:password.value}})
            .done (function(data)
            {
                var returnedData = data;
                returnedData= returnedData.replace("<br>","");
                returnedData=JSON.parse(returnedData);
                document.cookie="username="+ returnedData.login;
                document.cookie="points="+returnedData.points;
                document.cookie="login="+login.value;
                window.location.href = 'index.php';
                })

            });
});


</script>

</head>
<body>
<form class ="log_page" method="POST" action="log.php" name="log_form" id="log_form">
  <div>
    <label for="inputLogin" class="form-label">Логин</label>
    <input type="text" class="form-control" id="Login" name="Login" value>
  </div>
  <div>
    <label for="inputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="Password" name="Password" value>
  </div>
  <div>
    <br>
  <button type="submit" class="btn btn-primary" form="logadf_form" >Ввод</button>
</form>
</body>
</html>