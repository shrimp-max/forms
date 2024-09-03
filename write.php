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
$q1 = "";
$q2 = "";
$q3 = "";
$q4 = "";
$q5 = "";

if($year == "1991年"){
    $score++;
    $q1 = "正解";
}else{
    $q1 = "不正解";
};

if($point == "dポイント"){
    $score++ ;
    $q2 = "正解";
}else{
    $q2 = "不正解";
};

if($golf == "GOLF me!"){
    $score++ ;
    $q3 = "正解";
}else{
    $q3 = "不正解";
};

if($phone == "29機種"){
    $score++ ;
    $q4 = "正解";
}else{
    $q4 = "不正解";
};

if($brand == "ティファニー"){
    $score++ ;
    $q5 = "正解";
}else{
    $q5 = "不正解";
};
?>

<?php
//作成日時,名前,メールアドレス,質問への回答
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$year.",".$point.",".$golf.",".$phone.",".$brand.",".$score;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み a：末尾に書き込み
fwrite($file, $str."\n"); //."\n"：改行を意味する
fclose($file);
?>



<!-- 回答結果を表示させるHTML -->

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<meta name=”viewport” content=”width=device-width,initial-scale=1″>
<title>ドコモクイズ</title>
</head>
<body>
	<div>
		<h3>回答者情報</h3>
		<p class="answer">
			ニックネーム: <?php echo $name; ?>
		</p>
		<p class="answer">
			EMAIL: <?php echo $mail;?>
		</p>
        <p class="answer">
            正解数：<span><?php echo $score;?></span>
        </p>
	</div>
	<div>
		<h3>NTTドコモが設立された年は？</h3>
			<label class="answer">
				正解：1991年
			</label>
			<label class="answer">
				あなたの回答：<?php echo $year; ?>
			</label>
            <label class="answer">
                <?php echo $q1; ?>
            </label>
	</div>
	<div>
		<h3>NTTドコモが運営するポイントプログラムの名称は？</h3>
            <label class="answer">
				正解：dポイント
			</label>
			<label class="answer">
				あなたの回答：<?php echo $point; ?>
			</label>
            <label class="answer">
                <?php echo $q2; ?>
            </label>    
	</div>
	<div>
		<h3>NTTドコモが提供する月額定額でラウンドが楽しめる<br>ゴルフのサブスクサービス名称は？</h3>
            <label class="answer">
				正解：GOLF me!
			</label>
			<label class="answer">
				あなたの回答：<?php echo $golf; ?>
			</label>
            <label class="answer">
                <?php echo $q3; ?>
            </label>  
	</div>
	<div>
		<h3>らくらくほん/らくらくスマートフォンのシリーズ累計機種数は？</h3>
            <label class="answer">
				正解：29機種
			</label>
			<label class="answer">
				あなたの回答：<?php echo $phone; ?>
			</label>
            <label class="answer">
                <?php echo $q4; ?>
            </label>  
	</div>
	<div>
		<h3>NTTドコモが発売したことのないブランド端末はどこか？</h3>
            <label class="answer">
				正解：ティファニー
			</label>
			<label class="answer">
				あなたの回答：<?php echo $brand; ?>
			</label>
            <label class="answer">
                <?php echo $q5; ?>
            </label>  
	</div>
<ul>
<li><a href="post.php">もう一度回答する</a></li>
<li><a href="read.php">回答一覧</a></li>
</ul>
</body>
</html>


