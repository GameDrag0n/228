<?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$login = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost', 'root', '', 'helpdesk');
mysqli_set_charset($mysql, "utf8-BOM");
$result1 = $mysql->query("SELECT * FROM `users` WHERE `email` = '$login'");
$result2 = $mysql->query("SELECT * FROM `users` WHERE `password` = '$pass'");
$user_email = $result1->fetch_assoc();
$user_pass = $result2->fetch_assoc();
if ($user_email!=0 && $user_pass!=0){
	exit(header("Location: http://localhost/helpdesk/choice.php"));
 }
$mysql->close();
mysqli_close($link);
?>
