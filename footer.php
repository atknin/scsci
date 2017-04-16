<?php

require "connection.php";

$tasktosql = 'select * from comand';

$taskto = mysqli_query($link, $tasktosql);

$numchar = 0;

while($row = mysqli_fetch_array($taskto)) {
$numchar++;
}
?>
<div class="main4">
<table>
<tbody>
<tr>
<td>
<div class="text">
ПРИНЯТЬ УЧАСТИЕ В ПРОЕКТЕ
</div>
<div class="but">
<button><img src="logo/but.png"></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="main5">
<div class="we">
<div class="info5">
<div class="text1">с 2017 года</div>
<div class="text2">сегодня в нашей команде <?php echo $numchar;?> человек</div>
<div class="text3">веб-сайт подготовлен <span style="color: #ef0d33;">Алексеем</span> – 9 класс</div>
</div>
<div class="info6">
<div>
<h3>ПОДПИСАТЬСЯ</h3>
<div class="img">
  
  <a href="https://vk.com/scsci"> <img class="vk" src="logo/vk.png"></a>


<img class="youtube" src="logo/youtube.png">

<img class="insta" src="logo/insta.png">
</div>
</div>
</div>
</div>
<div class="contact">
<h3>СВЯЗАТЬСЯ С НАМИ</h3>
<table>
<tbody>
<!-- <tr>
<td style="padding-right: 55px;">
<img src="logo/tele.png">
</td>
<td>+7(915)132-24-37</td>
</tr> -->
<tr>
<td style="padding-right: 55px;">
<img src="logo/mail.png">
</td>
<td>info@scsci.ru</td>
</tr>
</tbody>
</table>
</div>
</div>
