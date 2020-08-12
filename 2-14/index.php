<?php


$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida","fujishiro"];
echo count($members);
echo '<br>';


$members = ["red", "blue", "yellow", "orange", "green"];
sort($members);
var_dump($members);
echo '<br>';

$numbers = [99, 77, 27, 56, 1];
sort($numbers);
var_dump($numbers);
echo '<br>';


$numbers = ["１", "２", "３", "４", "５"];
if (in_array("３", $numbers)) {
    echo "３を確認！";
} else {
    echo "３を確認できない！";
}
echo '<br>';


$members = ["Aさん", "Bさん", "Cさん", "Dさん", "Eさん"];
$atstr = implode("学生の", $members);
var_dump($atstr);
echo '<br>';
$re_members = explode("学生の", $atstr);
var_dump($re_members);
echo '<br>';




echo "1.　要件定義(要求仕様書)　"."<br>";
echo "1. 要件定義(要求仕様書)　:　"."<br>";
echo "1. 　:　リレーショナル・モデル によるデータベースであり、それに加えて データベースを作成、削除および管理する機能が提供されている"."<br>";
echo "2.  単体テスト・結合テスト　"."<br>";
echo "　単体テスト　：　Gitをより扱いやすくするために開発されたWindows用ソフトウェア"."<br>";
echo "　結合テスト　：　Subversion (SVN)のクライアントで、Windowsのシェルエクステンションとして機能"."<br>";
echo "３.　 テスト仕様書(どのようなもの、項目)　"."<br>";
echo "　テスト仕様書　：　"."<br>";
?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
