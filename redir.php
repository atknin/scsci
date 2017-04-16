<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="test1.css">
</head>
<body>
<?php

require "connection.php";

$name = $_REQUEST['name'];
$task = $_REQUEST['task'];
$nametask = $_REQUEST['taskname'];
$contact = $_REQUEST['contact'];
$photo = $_REQUEST['photo'];

$uploaddir = 'images/';
$uploadfile = $uploaddir . $_FILES['photo']['name'];

echo $uploadfile;

if(is_uploaded_file($_FILES["photo"]["tmp_name"]))
   {
	 echo "okey";

     move_uploaded_file($_FILES["photo"]["tmp_name"], $uploaddir . $_FILES["photo"]["name"]);
	 
	 echo "okey2 <br>";
   } else {
      echo("Ошибка загрузки файла");
   }

echo 'Некоторая отладочная информация:';
print_r($_FILES);

$insert_sql = "INSERT INTO comand (photo, name, task, nametask, contact)" .
        "VALUES ('{$uploadfile}','{$name}','{$task}','{$nametask}','{$contact}');";
		
$result = mysqli_query($link, $insert_sql)
    or die(mysql_error());
	
	header('Location: http://scsci.ru/characters.php');
	
?>
</body>
</html>