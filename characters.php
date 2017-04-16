<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>о нас</title>
<link rel="stylesheet" type="text/css" href="test1.css">
<link rel="icon" href="logo/icon.png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">></script>
</head>
<body>
<?php
require "connection.php";
$tasktosql = 'select * from comand';
$taskto = mysqli_query($link, $tasktosql);
?>
<div class="characters">
<div class="header">
<div class="text">
текст текст текст текст<br>
текст текст текст текст<br>
текст текст текст текст<br>
текст текст текст текст<br>
текст текст текст текст<br>
</div>
<div class="video">
<div style="text-align: center; color: white; font-size: 26pt; margin-top: 80px;";>
ВИДЕО
</div>
</div>
</div>
<div class="maincontent">
<table>
<tbody>
<?php
$numb = 0;
while($row = mysqli_fetch_array($taskto)) {
	$ost = $numb % 2;
	if($ost == 0){
		echo "<tr>";
	}

	$row['task'] = wordwrap($row['task'], 50, '<div class="bl2"></div>');
	$row['nametask'] = wordwrap($row['nametask'], 50, '<div class="bl2"></div>');

echo '
<td>
<div class="guy">
<div class="avatar">
<img src="'. $row['photo'] .'">
</div>
<div class="info">
<div class="name">'
.$row['name'].
'</div>
<div class="bl1">
</div>
<div class="infoguy">
<div class="you">
О себе:
</div>
<div class="youyou">'
.$row['task'].
'</div>
<div class="bl2">
</div>
<div class="work">
Название работы:
</div>
<div class="workyou">'
.$row['nametask'].
'</div>
<div class="bl2">
</div>
<div class="mailyou">'
.$row['contact'].
'</div>
<img src="mail.png">
<div class="bl2mail">
</div>
</div>
</div>
</div>
</td>';
$numb+= 1;
$ost = $numb % 2;
if($ost == 0){
echo "</tr>";
}
}
?>
</tbody>
</table>
</div>
</div>
<?php include("footer.php");?>
</body>
</html>
