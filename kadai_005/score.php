<!-- http://localhost/kadai_005/score.php -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    //点数を変数に代入
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 合計点数を計算
    $totalscore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    // 平均点数を計算
    $averagescore = $totalscore / 10;

    // 結果の表示
    echo "合計点数: " . $totalscore . "\n";
    echo "平均点数: " . $averagescore . "\n";
    ?>
  </p>
  
</body>
</html>