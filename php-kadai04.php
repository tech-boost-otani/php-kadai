<?php

//PHP/Laravel 04 課題

//1
function bi($x){
    echo $x * 2;
}

//結果
echo bi(3);
echo "\n";


//2
function add($a, $b){
    echo $a + $b;
}

//結果
echo add(2,3);
echo "\n";


//3

$arr = [1, 3, 5, 7, 9];

function kake($arr) {
    $result = 1;

    for($i = 0; $i <= 4; $i++ ){
        $result *= $arr[$i];
    }

    return $result;
}

//結果
echo kake($arr);
echo "\n";


//4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        // ここで配列の中の1番大きい値を探したい
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

$arr = [3, 5, 8, 6, 4];
echo max_array($arr);

echo "\n";


//5

//・strip_tags
//   文字列からHTMLタグを取り除く
echo strip_tags("<p>tech boost</p>");

echo "\n";


//・array_push
//   配列の最後に1つ以上の要素を追加する
$fruits = ["apple","orange","lemon"];
array_push($fruits,"banana","grapefruit");
print_r($fruits);

echo "\n";


//・array_merge
//   複数の配列を結合する
$array1 = [1, 2, 3];
$array2 = [4, 5];
$array = array_merge($array1, $array2);
print_r($array);


//・time
//   現在時刻のUNIXタイムスタンプを取得する
echo time();

echo "\n";


//・mktime
//   指定した日時のUNIXタイムスタンプを取得する
echo mktime(0, 0, 0, 8, 1, 2017);

echo "\n";


//・date
//現在の日時を指定した形式の文字列で返す
echo date('Y/m/d');

echo "\n";
