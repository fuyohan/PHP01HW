<?php

// フォームから送られてきたデータを取得し変数に代入
$age = $_POST['age'];
$sex = $_POST['sex'];
$problem = $_POST['problem'];
$time = $_POST['time'];
$demand = $_POST['demand'];


//文字作成(日付)
$t = date("Y-m-d H:i:s");

//データを変数にまとめる
$str1 = $t;
$str2 = $age;
$str3 = $sex;
$str4 = $problem;
$str5 = $time;
$str6 = $demand;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str1."\n");//ファイルへの書き込み
fwrite($file, $str2."\n");//ファイルへの書き込み
fwrite($file, $str3."\n");//ファイルへの書き込み
fwrite($file, $str4."\n");//ファイルへの書き込み
fwrite($file, $str5."\n");//ファイルへの書き込み
fwrite($file, $str6."\n");//ファイルへの書き込み
fclose($file);//ファイルを閉じるd
?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>
<h1>書き込みしました。</h1>

<ul>
    <li><a href="read.php">管理画面へ</a></li>
</ul>

</body>
</html>