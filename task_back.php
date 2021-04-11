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

// $sports_null = array_unique($sports);

// foreach ($sports_null as $value) {
//     print_r($value);
// }

$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

// array_diff ( 比較元の配列 , 比較対象の配列1 [, 比較対象の配列2 ...] );

$sports = array_diff($sports, [null]);
print_r($sports);

//Q5. 配列が空であれば true，1つ以上の要素があれば false を出力するコードを書いて下さい。

$array = [];
$array2 = [3, 6, 9];

if (empty($array)) {
    echo "true";
} elseif (!empty($array2)) {
    echo "false";
}

echo PHP_EOL;


// Q6. 次の配列から，期待された結果の配列 $numbers2 を作成し，出力して下さい。

// $numbers1 = [1, 2, 3, 4, 5];

// foreach ($numbers1 as $value) {
//     $numbers2 = $value *= 10;
//     print_r($numbers2);
// }

$numbers1 = [1, 2, 3, 4, 5];

$numbers2 = [];
foreach ($numbers1 as $value) {
    $value *= 10;
    array_push($numbers2, $value);
}
print_r($numbers2);

// Q7. 次の配列の要素を 文字列 から 数字 に変換し，出力して下さい。（新しい配列を作成せずに実現して下さい）

$array = ["1", "2", "3", "4", "5"];

$array2 = array_map('intval', $array);

var_dump($array2);

// Q8 . 期待する出力結果になるようにコードを書き加えて下さい。

$programming_languages = ["php", "ruby", "python", "javascript"];

print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);


// $result = array_change_key_case($programming_languages, CASE_UPPER);

// print_r($result);

$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);


// Q9. 次の配列を用いて，期待通りの出力結果になるようにコードを書いて下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

// $count = 0;

// foreach ($names as $name) {
//     $all_menbers = array_map("会員No" . $count++, $names);
//     print_r($all_menbers);
// }
$names2 = [];
foreach ($names as $key => $name) {
    $number = $key++;
    $name2 = "会員No." . $number . " " . $name;
    array_push($names2, $name2);
}
print_r($names2);


// Q10. 次の配列の各要素について， うに という文字列が含まれていれば「好物です」と表示し，そうでなければ「まぁまぁ好きです」と出力するコードを書いて下さい。

$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼"];

foreach ($foods as $food) {
    if (preg_match('/うに/', $food)) {
        print('好物です' . PHP_EOL);
    } else {
        print('まぁまぁ好きです' . PHP_EOL);
    }
}
