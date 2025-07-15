<?php 

$i = 1;
$result = 0;
for ($i = 1; $i <= 100; $i += 1){
    echo ($result += $i). "<br>";
};