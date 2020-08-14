<?php

$n = 0;
$s = 1;
$sum = 0;
$a = $sum += $n;
$b = 40 -= $sum;
while($sum < 40) {
    $n = mt_rand(1, 6);
    echo '<br>';
    $sum += $n;
    
    
    if($a > 40) {
        echo $s.'回目='.$b;
        echo '合計'.$s.'回でゴールしました。'
        break;
    }
    if($sum = 40) {
        echo $s.'回目='.$n;
        echo '合計'.$s.'回でゴールしました。'
        break;
    }
    echo $s.'回目='.$n;
    $s++;    
    }  

    
?>
