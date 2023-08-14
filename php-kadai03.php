<?php

//php/laravel 03 課題

//1
$name = "大谷弘明";

if ($name == "大谷弘明") {
    echo "私は" . $name . "です";
} else {
    echo $name . "ではありません";
}

echo "\n\n";


//2
$total = 0;

for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n\n";


//3
$fruits = array("apple", "orange", "lemon", "banana", "strawberry");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
echo "\n";


//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
