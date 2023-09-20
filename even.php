//for loop dia even numbers.

<?php 
    function evenNumbers($start, $end, $step){
        for ($start=1; $start<=$end; $start=$start+$step){
            if($even=$start+1){
                echo " $even \n";

            }
        }
    }
    evenNumbers(1, 20, 2);
?>

// while loop dia even numbers.

<?php 
function numbers($start, $end, $step){
    $start=1;
    while($start<=$end){
      
        if($even=$start+1){
            echo " $even \n";
            $start=$start+$step;

        }
     }
}
numbers(1, 20, 2);
?>

//do-while loop dia even numbers.

<?php 
function doNumbers($start, $end, $step){
    $start=1;
    do {
        if($even=$start+1){
            echo " $even \n";
            $start=$start+$step;
        }
    } while($start<=$end);
}
doNumbers(1, 20, 2);
?>


