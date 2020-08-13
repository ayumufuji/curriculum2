<?php
// index.php
$x = 2.42;
echo ceil($x);
echo '<br>';

 
// index.php
$x = 3.1;
echo floor($x);
echo '<br>';


// index.php
$x = 3.3;
echo round($x);
echo '<br>'; 


echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(1);
echo '<br>';


$limit_hour = 20;
$limit_minute = 10;
printf("学習時間%02d時間%02d分", $limit_hour, $limit_minute);
echo '<br>';

$number = 367;
$room_number = 24;
printf
("受験番号%03dは%03d号室", $number, $room_number);
echo '<br>';



echo mt_rand(1, 100000);
echo '<br>';



$str = "tokyo";
echo strlen($str);
echo '<br>';



$str = "tokyo";
echo strpos($str, "o");
echo '<br>';


$str = "tokyo";
echo substr($str, -4, 3);
echo '<br>';

$str = "tokyo";
echo str_replace("t", "T", $str);
echo '<br>';

$str = "東　京";
echo str_replace(" ", "", $str);
echo '<br>';

echo "1.　PostgreSQL・Oracle SQL　"."<br>";
echo "1. PostgreSQL　:　オープンソースのリレーショナルデータベース管理システム"."<br>";
echo "1. Oracle SQL　:　リレーショナル・モデル によるデータベースであり、それに加えて データベースを作成、削除および管理する機能が提供されている"."<br>";
echo "2. TortoiseGit・TortoiseSVN　"."<br>";
echo "　TortoiseGit　：　Gitをより扱いやすくするために開発されたWindows用ソフトウェア"."<br>";
echo "　TortoiseSVN　：　Subversion (SVN)のクライアントで、Windowsのシェルエクステンションとして機能"."<br>";
echo "３.　 外部設計・内部設計　"."<br>";
echo "　外部設計　：　システムを開発するための基本設計で、システムの概要や全体の構造、機能、画面のレイアウトやインターフェースなどを決めていく"."<br>";
echo "　内部設計　：　外部設計で決めた仕様を実現するために、ユーザーから見えない内部機能を設計していく"."<br>";
?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
