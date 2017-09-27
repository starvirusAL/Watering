<?
$adminemail="alexoid1990@gmail.com";  // e-mail админа, если несколько - через запятую без пробелов
$date=date("d.m.y");
$time=date("H:i");
$path = "http://" . $_SERVER['SERVER_NAME'];
//Новая заявка - тут можно сменить текст сообщения, главное, чтобы он был без кавычек
$msg=" 
Пора поливать, \n
запланировано на
сегодня на 12.00
"; 
echo $msg;
$headers = 'From: site ru <mail@site.ru>' . "\r\n";
mail("$adminemail", "Поливать пора", "$msg", $headers); //В скобках, где Новая заявка - тут можно изменить заголовок письма
?>