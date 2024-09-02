<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$year = $_POST["year"];
$point = $_POST["point"];
$golf = $_POST["golf"];
$phone = $_POST["phone"];
$brand = $_POST["brand"];

//時刻を日本時間にする
date_default_timezone_set('Asia/Tokyo'); 

$score = 0;
if($year == "1991年"){
    $score++ ;
}else{

};

if($point == "dポイント"){
    $score++ ;
}else{

};

if($golf == "GOLF me!"){
    $score++ ;
}else{

};

if($phone == "29機種"){
    $score++ ;
}else{

};

if($brand == "ティファニー"){
    $score++ ;
}else{

};


//作成日時,名前,メールアドレス,質問への回答
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$year.",".$point.",".$golf.",".$phone.",".$brand.",".$score;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み a：末尾に書き込み
fwrite($file, $str."\n"); //."\n"：改行を意味する
fclose($file);
?>




<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="post.php">戻る</a></li>
<li><a href="read.php">回答結果</a></li>
</ul>
</body>
</html>


