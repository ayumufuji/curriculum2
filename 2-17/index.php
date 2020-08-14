<?php

$n = 0;
$s = 1;
$sum = 0;


while($sum < 40) {
    $n = mt_rand(1, 6);
    echo '<br>';
    $sum += $n;
    if($sum >= 40) {
        echo $s.'回目='.$n;
        echo '<br>';
        echo '合計'.$s.'回でゴールしました。';
        break;
    }
    echo $s.'回目='.$n;
    echo '<br>';
    $s++; 
    }  
    
    $times = date("H", time());

    echo '<br>';
    echo '<br>';
    if(10 > $times && $times > 0 ) {
    echo "今".$times."時台です。";
    echo '<br>';
    echo "おはようございます";
    }

    if(18 > $times && $times > 10) {
    echo "今".$times."時台です。";
    echo '<br>';
    echo "こんにちは";
    }

    if(18 > $times && $times > 23 ) {
    echo "今".$times."時台です。";
    echo '<br>';
    echo "こんばんは";
    }

?>
