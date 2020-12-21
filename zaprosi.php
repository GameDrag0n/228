<?php
require_once 'connection.php';
if(isset($_POST['date']) && isset($_POST['position']) && isset($_POST['title_ticket'])){
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$date = filter_var(trim($_POST['date']), FILTER_SANITIZE_STRING);
$position = filter_var(trim($_POST['position']), FILTER_SANITIZE_STRING);
$title_ticket = filter_var(trim($_POST['title_ticket']), FILTER_SANITIZE_STRING);

$mysql = new mysqli("localhost", "root", "", "helpdesk");
mysqli_set_charset($mysql, "utf8");
$query="INSERT INTO tickets (date, position, title_ticket) VALUES ('$date', '$position', '$title_ticket')";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены. Номер запроса будет отправлен на почту.</span>";
	}
$mysql->close();
mysqli_close($link);
}
?>