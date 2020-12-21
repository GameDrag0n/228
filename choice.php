
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <link href="css/choice.css" type="text/css" rel="stylesheet">
	<title>КСП Краснодарского края</title>
</head>

<body>
    <div id="wrapper">
	    <div id="header">
		     <a href="index.php"><img class="toppic" src="img/1.png" width="1010px"; align="center"></a>
		</div>

		<div id="content">
			<p class="text"><b>Запрос на обслуживание</b><p>
			<a href="zapros.php"><img class="pic2" src="img/13.png" width="100px"> </a>
			<p class="text"><b>Просмотреть статус заявки</b><p>
			<a href="id_ticket.php"><img class="pic2" src="img/11.png" width="100px"> </a>
			<p class="text" align = "justify"> <b>Если возникли технические неполадки, перд тем как сообщить о сбоях ИТ-специалисту, посмотрите инструкцию</p>
			
			<script type="text/javascript">
			        function openbox(id){
					display = document.getElementById(id).style.display;
					if(display=='none'){
					document.getElementById(id).style.display='block';
					}else{
					document.getElementById(id).style.display='none';
					    }
					}
			</script>		
			
<a href="#" onclick="openbox('box'); return false"><b>В принтере застряла бумага?</b></a>
<div id="box" style="display: none;">
1. В первую очередь, конечно же, выключите его из сети.	<br>
2. Откройте дверцу и извлеките картридж.<br>
3. Аккуратно выньте бумагу.<br>
4. Если же вы всё-таки бумагу порвали - потяните за оборванный край до полного извлечения остатков листа.<br>
5. После того, как вы вынули бумагу, установите картридж на место.<br>
6. Закройте крышку принтера.<br>
7. Вкдючите принтер в сеть.<br>
8. Попробуйте продолжить печатать.</b></div>
<br><br>
<a href="#" onclick="openbox('box2'); return false"><b>	Не отправляются данные в базу?</b></a>
<div id="box2" style="display: none;"><b>
Возможно, вы не заполнили необходимые поля или ввели данные некорректно.Пожалуйста, выполните необходимые условия для отправки.</b></div><br><br>
<a href="#" onclick="openbox('box3'); return false"><b>	Не выдается список документов?</b></a>
<div id="box3" style="display: none;"><b>
Информация о документах может отсутствовать в базе данных, поэтому таблица со списком документов пустая. В таком случае проверьте наличие информации в базе данных. Если она имеется, тогда оставьте заявку об инциденте и сообщиет о сбое ИТ-сервисов специалисту.</b></div>

</div>
		</div>	
	</div>
</body>
</html>	