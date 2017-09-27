<?php

header('Content-Type: application/json');
date_default_timezone_set('Europe/Kiev'); 
$a =date("H:i");
$d =(date ("Y-m-d ")) ;
$f = fopen ("datanow.txt",  "w");
fseek ($f, 0, SEEK_SET);
fwrite ($f, $d);
fwrite ($f, $a);
fflush($f);
echo "Ура! Записали $d $a ";

    

 
    

?>
