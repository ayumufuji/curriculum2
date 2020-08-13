<?php

$test_file = "test2.txt";
if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line.'<br>'; 
    }
    
} else { 
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}

// 開いたファイルから1行ずつ読み込む
while ($line = fgets($fp)) {
//改行コード込みで1行ずつ出力
    echo $line.'<br>';
}
// ファイルを閉じる
fclose($fp);

echo "1.　CakePHPの2系・3系の違い　"."<br>";
echo " CakePHPの2系・3系の違い　:　　モデルの変更やパフォーマンスの工場があった"."<br>";
echo "2.  LAMP　"."<br>";
echo "　LAMP　：　Webアプリケーション の プラットフォーム となる オープンソースソフトウェア の組み合わせで、 OS の「 Linux 」、 サーバーソフトウェア の「 Apache 」、 データベース管理システム の「 MySQL 」、そして オブジェクト指向 の スクリプト言語 である「 PHP 」（あるいは Perl 、 Python ）の セット のこと  "."<br>";
echo "３.　 AWS　"."<br>";
echo "　AWS　：　Amazonが提供している100以上のクラウドコンピューティングサービスの総称  "."<br>";
?>