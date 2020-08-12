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
echo "1. 要件定義(要求仕様書)　:　開発するスケジュールを開発側と顧客側で合意したこと」をまとめたもの"."<br>";
echo "1. 　:　開発するスケジュールを開発側と顧客側で合意したこと」をまとめたものです"."<br>";
echo "2.  単体テスト・結合テスト　"."<br>";
echo "　単体テスト　：　単体テストとは、ソフトウェアやシステムのテスト手法の一つで、単一の部品（モジュール）を対象に行うテスト"."<br>";
echo "　結合テスト　：　開発中のソフトウェアのテスト手法の一つで、複数のモジュール（部品）を組み合わせて行うテスト"."<br>";
echo "３.　 テスト仕様書(どのようなもの、項目)　"."<br>";
echo "　テスト仕様書　：　システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうかテストするポイントをまとめたドキュメントで、以下のような項目が挙げられる"."<br>";
echo " テストを実施した環境"."<br>";
echo " 実施するテストの内容"."<br>";
echo " テストを実施するためのシステムの操作手順"."<br>";
echo " テストの実行結果"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
