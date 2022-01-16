<?php

// ファイルを開く
$file = fopen('data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    //echo nl2br($str);
    echo '<div class="result">'.$str.'</div>';
}

// ファイルを閉じる
fclose($file);

?>

<html>


<ul>
    <li><a href="input.php">入力画面へ</a></li>
</ul>

</body>
</html>