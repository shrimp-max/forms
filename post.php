<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<meta name=”viewport” content=”width=device-width,initial-scale=1″>
<title>ドコモクイズ</title>
</head>
<body>
<form action="write.php" method="post">
	<div>
		<h3>回答者情報</h3>
		<p class="name">
			ニックネーム: <input type="text" name="name" required>
		</p>
		<p class="name">
			EMAIL: <input type="text" name="mail" required>
		</p>
	</div>
	<div>
		<h3>NTTドコモが設立された年は？</h3>
			<label class="form">
				<input type="radio" id="years" name="year" value="1989年" required>1989年
			</label>
			<label class="form">
				<input type="radio" id="years" name="year" value="1990年">1990年
			</label>
			<label class="form">
				<input type="radio" id="years" name="year" value="1991年">1991年
			</label>
	</div>
	<div>
		<h3>NTTドコモが運営するポイントプログラムの名称は？</h3>
			<label class="form">
				<input type="radio" id="points" name="point" value="ドコモポイント" required>ドコモポイント
			</label>
			<label class="form">
				<input type="radio" id="points" name="point" value="dクラブ">dクラブ
			</label>
			<label class="form">
				<input type="radio" id="points" name="point" value="dポイント">dポイント
			</label>
	</div>
	<div>
		<h3>NTTドコモが提供する月額定額でラウンドが楽しめる<br>ゴルフのサブスクサービス名称は？</h3>
			<label class="form">
				<input type="radio" id="golfs" name="golf" value="GOLF me!" required>GOLF me!
			</label>
			<label class="form">
				<input type="radio" id="golfs" name="golf" value="GOLF do!">GOLF do!
			</label>
			<label class="form">
				<input type="radio" id="golfs" name="golf" value="Free Shot">Free Shot!
			</label>
	</div>
	<div>
		<h3>らくらくほん/らくらくスマートフォンのシリーズ累計機種数は？</h3>
			<label class="form">
				<input type="radio" id="phones" name="phone" value="19機種" required>19機種
			</label>
			<label class="form">
				<input type="radio" id="phones" name="phone" value="29機種">29機種
			</label>
			<label class="form">
				<input type="radio" id="phones" name="phone" value="39機種">39機種
			</label>
	</div>
	<div>
		<h3>NTTドコモが発売したことのないブランド端末はどこか？</h3>
			<label class="form">
				<input type="radio" id="brands" name="brand" value="ドルチェ&ガッバーナ" required>ドルチェ&ガッバーナ
			</label>
			<label class="form">
				<input type="radio" id="brands" name="brand" value="ティファニー">ティファニー
			</label>
			<label class="form">
				<input type="radio" id="brands" name="brand" value="バカラ">バカラ
			</label>
	</div>
	<button type="submit">回答</button>
</form>
<!-- <ul>
<li><a href="index.php">index.php</a></li>
<li><a href="read.php">回答結果</a></li>
</ul> -->

<script>
	//実施したいこと
	///すべての質問に回答しないと送信できない仕組みにしたい（空欄の場合は注意が出るようにする）
</script>
</body>
</html>