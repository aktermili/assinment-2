<?php
echo"<h2>skip of multiple five:</h2> \n";
for ($i=1; $i<=50;$i=$i+1){
    if ($i % 5 == 0)
    {
        continue;
    }
    echo  "$i \n";
  }
?>
