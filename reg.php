<html>
<title>

</title>
<head>
<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form class ="reg_page" method="POST" action="add_user.php" name="reg_form" id="reg_form">
  <div>
    <label for="inputLogin" class="form-label">Логин</label>
    <input type="text" class="form-control" id="Login" name="Login">
  </div>
  <div>
    <label for="inputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
  <div>
    <label for="inputName" class="form-label">Имя пользователя</label>
    <input type="text" class="form-control" id="UserName" name="UserName">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" form="reg_form" >Ввод</button>
</form>
</body>
</html>