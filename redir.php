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
$photo = $_REQUEST['photo'];

$uploaddir = '/i';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";


$insert_sql = "INSERT INTO comand (photo, name, task, nametask)" .
        "VALUES ('{$photo}','{$name}','{$task}','{$nametask}');";
		
$result = mysqli_query($link, $insert_sql)
    or die(mysql_error());
	
	
	
?>
</body>
</html>