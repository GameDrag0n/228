<html>
<table>
 <tr>
 <td>

   
 <?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$number = filter_var(trim($_POST['id_ticket']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'helpdesk');
mysqli_set_charset($mysql, "utf8-BOM");

if ($mysql->connect_errno) exit("Соединение не удалось");

    $result = $mysql->query("SELECT `status` FROM `tickets` WHERE `id_ticket` = '$number'"); 
	
if ($result!=0)
		echo 'Статус заказа: '.$row['status'];
$mysql->close();
mysqli_close($link);
?>
</td>
</tr>
</table>
</html>