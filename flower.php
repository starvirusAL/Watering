<?
    
    $one_file_name = "datanow.txt"; // Название первого файла
    $two_file_name = "datawater.txt"; // Название второго файла
	$im_1    = imagecreatefrompng("flower1.gif");
	$im_2    = imagecreatefrompng("flower2.gif");
  
    
    $one = file_get_contents('datanow.txt');
    $two = file_get_contents('datawater.txt');
		if ($one < $two) {
			echo  $im_2;
	} 
elseif ($one == $two) {
	echo $im_1
} 
else {
	echo   $im_1
}
    
    
     
?> 