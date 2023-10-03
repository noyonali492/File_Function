<?php
$file = fopen("test.txt","r");
print_r(fgetcsv($file));
fclose($file);
?>