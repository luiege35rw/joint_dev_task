<?php
//PHP基礎１
//Q1. 次の配列の最後に "斎藤" を追加し，出力して下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

array_push($names, "斉藤");

print_r($names);


//Q2. 次の二つの配列を合体させた新しい配列 $array を作成し，出力して下さい。

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

print_r(array_merge($array1, $array2));

//Q3. 次の配列の中に 3 がいくつあるかを出力するコードを書き，出力して下さい。

$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

//array_count_values関数を使用する

// $count = array_count_values($numbers);
// foreach ($numbers as $number) {

//     if ($count === 3) {
//         print_r($count);
//     }
// }


$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

$count = 0;
foreach ($numbers as $number) {
    if ($number === 3) {
        $count++;
    }
}
print_r($count . "回" . PHP_EOL);

echo PHP_EOL;


// Q4. 次の配列から null の要素を削除し，出力して下さい。（新しい配列を作成せずに実現して下さい）

$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

//array_unique

$sports_null = array_unique($sports);

foreach ($sports_null as $value) {
    echo $value;
}

//Q5. 配列が空であれば true，1つ以上の要素があれば false を出力するコードを書いて下さい。

$array = [];
$array2 = [3, 6, 9];

if (empty($array)) {
    echo "true";
} elseif (!empty($array2)) {
    echo "false";
}
