<html>
<table>
 <tr>
 <td>

   
 <?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$mysql = new mysqli('localhost', 'root', '', 'helpdesk');
mysqli_set_charset($mysql, "utf8-BOM");

if ($mysql->connect_errno) exit("Соединение не удалось");

    $result = $mysql->query("SELECT * FROM tickets"); {
    $tickets = array();
    while ($row = $result->fetch_assoc()) {
        echo"<tr>";
		echo"<td>";
		echo 'id_ticket: '.$row['id_ticket'];
        echo 'title_ticket: '.$row['title_ticket'];
		echo 'date: '.$row['date'];
        echo 'position: '.$row['position'];
		echo"</td>";
		echo"</tr>";
		
		array_push($tickets, $row);
     
    }
    $result->free();
}
?>
</td>
</tr>
</table>
</html>