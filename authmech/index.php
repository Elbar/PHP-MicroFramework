<?php
session_start();
?>  
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<meta charset="utf-8">
 </head>
   <body>
 <style>
 
        body {
            padding-top: 50px;
            padding-bottom: 20px;
            color: #888;
        }

        .form-top {
            padding: 30px;
            border-radius: 5px;
        }

        .form-bottom {
            background-color: #eee;
            padding: 20px 30px;
        }

        h3 {
            margin-top: 0px;
        }

        label {
            font-weight: normal;
            font-size: 18px;
        }
    </style>
 
<?php
// Set session variables
$_SESSION["username"] = "Fukuro";
$_SESSION["password"] = "admin";
$_SESSION["date"]  = "06.01.1996";
$_SESSION["counter"] = 1;
$_SESSION['info'] = "Lorem ipsum dolor sit amet";

echo "Session variables are set.";

?>

</body>
</html>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="auth-form">
                    <div class="form-top">

                        <h3>Авторизация</h3>
                    </div>
                    <div class="form-bottom">
                        <form class="" name="LoginForm" action="auth.php" method="post">
                      
                            <div class="form-group">
                                <label for="username">Имя пользователя</label>
                                <input type="text" class="form-control" id="username" name="username"
                                       placeholder="Имя пользователя">
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control"  id="password" name="password"  placeholder="Пароль">
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
