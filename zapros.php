<html lang="ru">
<head>

<title>КСП Краснодарского края</title>

</head>
<body>
    <div id="wrapper">
	<br><br>
	    <a href="choice.php"><img class="toppic" src="img/1.png" width="1010px"; align = "right"></a>
	</div>
	
	<div id="content">
	
	    <form action="zaprosi.php" method="post">
		    <div class="container">
			    <p class="t" align="center"> <b>Запрос на обслуживание</b></p>
				
				<label for="email"><b>Дата</b></label>
				<input type="date" placeholder="Введите Email" name="date" required> <br>
				
				<label for="name"><b>От кого</b></label>
				<input type="text" placeholder="Должность" name="position" required list="posit"> <br>
				<datalist id="posit">
				    <option value="Директор">
					<option value="Главный бухгалтер">
					<option value="Сотрудник отдела кадров">
					<option value="Бухгалтер">
					<option value="Аудитор">
				</datalist>
				<label for="name"><b>Тема запроса</b></label>
				<input type="text" placeholder="Тема" name="theme" required list="theme"> <br>
				<datalist id="theme">
				    <option value="Запрос на приобретение">
					<option value="Сообщить о сбоях">
					<option value="Запрос на обслуживание">
				</datalist>
	<p><b>Суть запроса:</b></p>
    <p><textarea name="title_ticket"></textarea></p>

	<button type="submit" class="registerbtn">Отправить</button>
	</div>
</div>

</body>
</html>