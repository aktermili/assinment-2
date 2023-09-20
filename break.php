<?php
$num = 0;  
$n1 = 1;  
$n2 = 2;  
echo "<h3>Fibonacci  first 10 numbers: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num <10) 
{ 
    $n3 = $n2 + $n1; 
    if($n3>100){
        break;
    }   
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;
    
} 
?>  
