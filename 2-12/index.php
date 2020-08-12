
<form action="result.php" method="post">
    
お名前：<input type="text" name="my_name" /><br>
ご希望商品：
<input type="radio" name="goods" value="A賞">A賞
<input type="radio" name="goods" value="B賞">B賞
<input type="radio" name="goods" value="C賞">C賞
<br>
個数：
<select name="numbers">
  <?php for ($i=1;$i<=10;$i++){ ?>
    <option value="<?php echo $i; ?>">
      <?php echo $i; ?>
    </option>
  <?php } ?>
</select>

<input type="submit" value="申込" /><br>

</form>

<?php
echo "1.モジュール"."<br>";
echo "1.モジュール　:　機器やシステムの一部を構成するひとまとまりの機能を持った部品で、システム中核部や他の部品への接合部（インターフェース）の仕様が明確に定義され、容易に追加や交換ができるようなもののこと"."<br>";
echo "2.バージョン管理システム"."<br>";
echo "バージョン管理システム　：　バージョン管理システムとは、ファイルの変更履歴の保存・管理を行うソフトウェア"."<br>";
echo "３.サブクエリ"."<br>";
echo "サブクエリ　：　データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文"."<br>";
?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">




