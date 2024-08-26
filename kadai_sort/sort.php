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
              // ソート方向に基づいて配列をソート
              if ($order) {
                  asort($array);  // 昇順にソート
                  echo "昇順にソートします。<br>";
              } else {
                  arsort($array); // 降順にソート
                  echo "降順にソートします。<br>";
              }

              // ソートされた配列の要素を出力
              foreach($array as $val) {
                  echo $val . "<br>";
              }
              echo "<br>"; // 間にスペースを挿入
          }

          // ソートする配列を宣言
          $nums = [15, 4, 18, 23, 10];

          // 昇順ソートを呼び出し
          sort_2way($nums, true);

          // 降順ソートを呼び出し
          sort_2way($nums, false);
      ?>
    </p>
</body>

</html>
