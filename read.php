<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
$file = fopen('data/data.txt', 'r');// ファイルを開く

// // ファイル内容を1行ずつ読み込んで出力
// while ($str = fgets($file)) {
//     echo nl2br($str); // nl2br() ... 改行文字を追加
// }
// fclose($file); // ファイルを閉じる

//ファイル
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css"/>
</head>
<body>
<table id="answer">
    <thead>
        <tr>
            <th>回答時刻</th>
            <th>氏名</th>
            <th>メールアドレス</th>
            <th>設立年</th>
            <th>ポイントプログラム</th>
            <th>ゴルフサブスクサービス</th>
            <th>らくらくホンの累計機種数</th>
            <th>コラボしたことのないブランド</th>
            <th>正解数</th>
        </tr>
    </thead>
    <tbody>
    <?php

        //グラフ用の配列を作成
        $years = [];
        $points = [];
        $golfs = [];
        $phones = [];
        $brands = [];
        $scores = [];
        
        //ファイルを読み込んで配列に格納
        while($str = fgets($file)){ //1行ずつ読み込む
            $array = explode(",",$str);//読み込んだ行をカンマで区切って配列に格納
            array_push($years,$array[3]); //yearの回答結果のみの配列作成
            array_push($points,$array[4]); //pointの回答結果のみの配列作成
            array_push($golfs,$array[5]); //golfの回答結果のみの配列作成
            array_push($phones,$array[6]); //phoneの回答結果のみの配列作成
            array_push($brands,$array[7]); //brandの回答結果のみの配列作成
            array_push($scores,$array[8]); //scoreの回答結果のみの配列作成

            echo "<tr>"; //echo "HTMLタグ"でPHP内でもHTMLタグを有効化できる

            //配列の要素を1つずつ、表に格納する
            for($i = 0; $i<count($array); $i++){?> 
                <?php echo "<td>$array[$i]</td>"?>
                <?php
            };
            echo "</tr>";
        };
        // var_dump($years);
        // var_dump($points);
        $json_years = json_encode($years);
        $json_points = json_encode($points);
        $json_golfs = json_encode($golfs);
        $json_phones = json_encode($phones);
        $json_brands = json_encode($brands);
        $json_scores = json_encode($scores);
        ?>
    </tbody>
</table>

<div>
    <?php
    //     $fp = fopen("./scores.csv",'w');
    //     foreach ($scores as $csv_scores) fputcsv($fp, $csv_scores);
    //     fclose($fp);
    // ?>
</div>

<!-- グラフを書きたいところにcanvasタグを追加する -->
<canvas id="chartJS"></canvas>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script type ="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js" integrity="sha512-7DgGWBKHddtgZ9Cgu8aGfJXvgcVv4SWSESomRtghob4k4orCBUTSRQ4s5SaC2Rz+OptMqNk0aHHsaUBk6fzIXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // オプションの設定
    let tableOptions = {
    // ここに設定値を書いていく
    "searching": true,
    };
    // テーブルの作成
    $("#answer").DataTable(tableOptions);

    // let hako = JSON.parse(<?php //echo $csv_scores; ?>);
    //console.log(hako);

    //きのこたけのこグラフの作成
    // let chart = document.getElementById("chartJS");
    // let circlechart = new Chart(chart,{ //新しくグラフを作成
    //     type:"bar", //グラフのタイプを指定 pie：円グラフ
    //     data:{
    //         labels:["0","1","2","3","4","5"],
    //         datasets: [{
    //             backgroundcolor:"#BB5179",
    //             
    //         }]
    //     },
    //     options: {
    //         title:{
    //             display:true,
    //             text:"きのこの山派？たけのこの里派？"
    //         }
    //     }
    // });
</script>
<ul>
<li><a href="post.php">もう一度回答する</a></li>
<li><a href="read.php">回答一覧</a></li>
</ul>
</body>
</html>

<!-- メモ 
 ・dataTablesを使う場合は、thead,tbodyを指定すること
 ・chartjs https://qiita.com/Haruka-Ogawa/items/59facd24f2a8bdb6d369



-->

<!-- data:[] -->

