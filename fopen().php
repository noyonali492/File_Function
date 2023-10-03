<?php
 $n = fopen("fopen.txt","r+");
 fread($n,filesize("fopen.txt"));
 fwrite($n,"noyon ali ");



?>