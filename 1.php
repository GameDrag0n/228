$result=mysql_query("SELECT * FROM таблица_заявок WHERE status=0 ORDER BY date DESC;");//я предположил что если статус заявки равен 0 то она не выполнена и сортируем по времени создания
//длаее вывод
while ($row=mysql_fetch_array($result))
{
$output.='<tr><td>'.$row['id_order'].'</td><td>'.$row['date'].'</td><td>'.$row['malfunction'].'</td></tr>';//для вывода я взял произвольные поля таблицы
}
//ну и где надо показать
echo '<table>'.$output.'</table>';