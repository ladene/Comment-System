<?php
$file = "comments.txt";
$lines = count(file($file)); 
echo $lines;
if($lines == 36)
{
unlink($file);
}

?>