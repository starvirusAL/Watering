<?php

header('Content-Type: application/json');
$a = " 12:00";
$d = $_POST['calendar'];
$f = fopen ("datawater.txt",  "w");
fseek ($f, 0, SEEK_SET);
fwrite ($f, $d);
fwrite ($f, $a);
fflush($f);
header( 'Refresh: 0; url=index.php' );

    
?>
