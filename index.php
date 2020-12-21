<!DOCTYPE html>
<html lang="ru">
<head>
<title>КСП Краснодарского края</title>
</head>
<body>
  <div id="wrapper">
    <div id="header">
    <br><br>
        <a href="index.php"><img class="toppic" src="img/1.png" width="1010px"; align="center"></a>
  </div>

    <div id="content">
        <form action="auth.php" method="post" id="email">
            <h1 align="center"><b>Авторизация</b></h1>
            <p class="text" align="center"> <b>Авторизуйтесь как пользователь для входа в систему</b></p>
                <input id="email" placeholder="Почта" type="text" name="email">
                <input id="password" placeholder="Пароль" type="text" name="password">
                <input id="submit" value="Войти" type="submit" onClick="nextstep">
        </form>
    </div>

<div id="content">
        <form action="authspec.php" method="post" id="email">
            <p class="text" align="center"> <b>Авторизуйтесь как специалист для входа в систему</b></p>
                <input id="email" placeholder="Почта" type="text" name="email">
                <input id="password" placeholder="Пароль" type="text" name="password">
                <input id="submit" value="Войти" type="submit" onClick="nextstep">
        </form>
    </div>
	
</body>
</html>