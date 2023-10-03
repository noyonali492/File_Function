<?php
$path = "New Text Document.txt";
echo basename($path) ."<br/>";

echo basename($path,".txt")."<br/>";
echo basename(".txt");
?>