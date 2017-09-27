<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>
Полив цветов в DrupalWay</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <script src="xz.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
 </head>
 <body onload="myFunction()">
  <div id="header"><h1>Полив цветов в DrupalWay</h1></div>
  
<script type="text/javascript">
$(document).ready(function(){
	$('#output1').hide();
 $('#buttom').click(function(){
  $(this).parent().children('#output1').slideToggle();
  return false;
 });
});
</script>
  
  
<div id="calendar">
<form method="post" action="datawater.php" name="calendar">
   Установить дату следующего полива: <br> <input type="date" name="calendar">
  <br><br> <input type="submit" value="выбрать">
</form>
</div>
<div id="data" >

  <? 
  date_default_timezone_set('Europe/Kiev'); 
  echo (date("Y-m-d  H:i"));?>
</div>
 <br><br>
  <div id="content">
   <h2></h2>
   <img src="flower1.gif">
   <div onclick="myFunction1()" id="buttom">проверка</div> 
   <div id="output1"></div>
  </div>
  

 </body>
</html>
