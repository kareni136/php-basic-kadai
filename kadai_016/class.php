<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php

      // Foodクラスを定義する
      class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        // show_priceメソッドを定義する
        public function show_price() {
          echo $this->price;
        }
      }

      // Animalクラスを定義する
      class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        // show_heightメソッドを定義する
        public function show_height() {
          echo $this->height;
        }
      }

      // Foodクラスのインスタンスを作成する
      $food = new Food('potato', 250);

      // Animalクラスのインスタンスを作成する
      $animal = new Animal('dog', 60, 5000);

      // Foodオブジェクトを表示する
      print_r($food);
      echo "<br>";

      // Animalオブジェクトを表示する
      print_r($animal);
      echo "<br>";

      // show_priceメソッドを呼び出して、ポテトの値段を表示する
      echo $food->show_price() . "<br>";

      // show_heightメソッドを呼び出して、犬の身長を表示する
      echo $animal->show_height() . "<br>";

      ?>
    </p>
  
  </body>

</html>
