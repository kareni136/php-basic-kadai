<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
          $nums = [15, 4, 18, 23, 10 ];
          
          // 配列を昇順にソート
          asort($nums);   //　asortが昇順
          
          // メッセージを表示
          echo "昇順にソートします。<br>";
          
          // ソートされた配列を表示
          foreach($nums as $key => $val) {
              echo $val . "<br>";
          }

          // 配列を降順にソート
          arsort($nums);  // arsortが降順
          
          // メッセージを表示
          echo "降順にソートします。<br>";
          
          // ソートされた配列を表示
          foreach($nums as $key => $val) {
              echo $val . "<br>";
          }
          ?>
    </p>
</body>

</html>
