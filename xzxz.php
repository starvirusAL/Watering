<?
   
    $one_file_name = "datanow.txt"; // Название первого файла
    $two_file_name = "datawater.txt"; // Название второго файла
    
    
    $one = file_get_contents('datanow.txt');
    $two = file_get_contents('datawater.txt');
    if ($one < $two) {
    echo "Еще не пора поливать. Запланировано на: $two";
	
} elseif ($one == $two) {
$adminemail="alexoid1990@gmail.com";  // e-mail 
$date=date("d.m.y");
$time=date("H:i");
$path = "http://" . $_SERVER['SERVER_NAME'];
//Новая заявка - тут можно сменить текст сообщения
$msg=" 
Пора поливать, \n
запланировано на
сегодня на 12.00
"; 
echo $msg;
$headers = 'From: site ru <mail@site.ru>' . "\r\n";
mail("$adminemail", "Поливать пора", "$msg", $headers); // заголовок письма

} 
else {
    echo "Выбрана не правильная дата!";
}
    
    
     
?> 