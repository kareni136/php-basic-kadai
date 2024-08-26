<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
          // 独自のソート関数を定義
          function sort_2way(&$array, $order) {
              if ($order) {
                  asort($array);  // 昇順にソート
              } else {
                  arsort($array); // 降順にソート
              }
          }

          // ソートする配列を宣言
          $nums = [15, 4, 18, 23, 10];

          // 昇順ソートを呼び出し
          echo "昇順にソートします。<br>";
          sort_2way($nums, true);
          foreach($nums as $val) {
              echo $val . "<br>";
          }

          echo "<br>"; // 間にスペースを挿入

          // 降順ソートを呼び出し
          echo "降順にソートします。<br>";
          sort_2way($nums, false);
          foreach($nums as $val) {
              echo $val . "<br>";
          }
      ?>
    </p>
</body>

</html>