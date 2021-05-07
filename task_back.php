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
var_export(!empty($array1));

$array2 = [3, 6, 9];
var_export(empty($array2));

// if (empty($array)) {
//     echo "true";
// } elseif (!empty($array2)) {
//     echo "false";
// }




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


$programming_languages = array_map('ucfirst', $programming_languages);
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
    $number = $key + 1;
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

// Q11 . 次の配列を用いて，期待する出力結果になるようにコードを書いて下さい。

$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

$hobby = 'ユーザーの趣味一覧';

echo $hobby;

echo PHP_EOL;

// $sports2 = [];
// foreach ($sports as $key => $sport) {
//     if (is_array($sport)) {
//         $sports2 = array_merge($sports2, $sport);
//     } else {
//         array_push($sports2, $sport);
//     }
// }

// $sports2 = array_unique($sports2);
// $sports2 = array_values($sports2);

// $sports3 = [];

// foreach ($sports2 as $key => $sport) {
//     $number = $key + 1;
//     $sports3 = "No" . $number . " "
//         . $sport;
//     array_push($sports3, $sport);
// }

// print_r("ユーザの趣味一覧" . PHP_EOL);
// foreach ($sports3 as $sport) {
//     print($sport . PHP_EOL);
// }

// echo PHP_EOL;

$sports2 = [];
foreach ($sports as $sport) {
    if (is_array($sport)) {
        $sports2 = array_merge($sports2, $sport);
    } else {
        array_push($sports2, $sport);
    }
}
$sports2 = array_unique($sports2);

$number = 1;
foreach ($sports2 as $sports3) {
    echo "No" . $number . " " . $sports3 . PHP_EOL;
    $number++;
}



// ユーザーの趣味一覧
// No1 サッカー
// No2 バスケ
// No3 野球
// No4 フットサル
// No5 水泳
// No6 ハンドボール
// No7 卓球
// No8 ボルダリング


// Q12. 次の連想配列から name の値を出力して下さい。

$data = ["user" => ["name" => "satou", "age" => 33]];

// $array = array_column($data, 'name');

// echo $data;

print_r($data["user"]["name"]);


// Q13. 次の $user_data に，$update_data の内容を反映させ，$user_data の内容を書き換え，出力して下さい。

$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

$update = array_merge($user_data, $update_data);
print_r($update);

echo PHP_EOL;


// Q14 . 次の連想配列から全てのキー（添字）を取り出して、キーが数字である通常の配列（添字配列）を作成し，出力して下さい。

$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

// $new_data = [];
// foreach ($data as $sub_data) {
//     array_push($new_data, $sub_data);
// }
// print_r($new_data);

print_r(array_values($data));

echo PHP_EOL;

// Q15. age というキーが含まれている場合は OK ，含まれていない場合は NG という文字列が出力されるコードを書いて下さい。

$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
# 実行結果
// OK

$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];
# 実行結果
// NG

// $new_data = array_merge($data1, $data2);

// print_r($new_data);

if (array_key_exists('age', $data1)) {
    echo 'OK';
} else {
    echo 'NG';
}


if (array_key_exists('age', $data2)) {
    echo 'OK';
} else {
    echo 'NG';
}

// Q16 . 次の配列の各要素について，「私の名前は〜です。年齢は〜歳です。」と表示して下さい。

$users = [
    ["name" => "satou", "age" => 22],
    [
        "name" => "yamada", "age" => 12
    ],
    ["name" => "takahashi", "age" => 32],
    ["name" => "nakamura", "age" => 41]
];

foreach ($users as $user) {
    echo  "私の名前は" . $user['name'] . "です。年齢は" . $user['age'] . "です";
}

//Q17. 次の Userクラス 内にinfoメソッドを追加し，期待する出力結果になるようにして下さい。

class User
{

    protected $name;
    protected $age;
    protected $gender;
    //constructメソッドの引数を追加
    function __construct($user_name, $user_age, $user_gender)
    {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->gender = $user_gender;
    }

    function info()
    {
        print("名前:" . $this->name . PHP_EOL);
        print("年齢:" . $this->age . PHP_EOL);
        print("性別:" . $this->gender . PHP_EOL);
    }
}

//constructメソッドの引数を返す
$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------" . PHP_EOL);
$user2->info();
echo PHP_EOL;


//Q18. 年齢を用いた場合分けを利用して，期待する出力結果になるようなManクラスを作成して下さい。

# コードを追加
class Man
{

    protected $name;
    protected $age;

    function __construct($user_name, $user_age)
    {
        $this->name = $user_name;
        $this->age = $user_age;
    }

    function introduce()
    {
        //年齢による場合分け条件分岐
        if ($this->age >= 20) {
            print("こんにちは," . $this->name . "と申します。宜しくお願いいたします。" . PHP_EOL);
        } else {
            print("はいさいまいど〜，" . $this->name . "です！！！" . PHP_EOL);
        }
    }
}

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

//Q19. 次のコードはエラーが出ます。期待する出力結果となるようにコードを修正して下さい。

class Item
{
    //アクセス権をどこからでも可能にする
    public $name;

    function __construct($book_name)
    {
        $this->name = $book_name;
    }
}

$book = new Item("ゼロ秒思考");
print($book->name . PHP_EOL);

echo PHP_EOL;


//Q20. 次の仕様を満たした上で，期待する出力結果になるようにコードを追加して下さい。
//年齢区分は，幼児(0〜5歳)，子供(6〜12歳)，成人(13〜64歳)，シニア(65〜120歳)の4パターンとします。（この範囲外の年齢については対処しなくてOKです）

class Human
{

    public $name;
    public $age;

    function __construct($user_name, $user_age)
    {
        $this->name = $user_name;
        $this->age = $user_age;
    }
}

class Zoo
{

    protected $name;
    protected $entry_fee;

    function __construct($zoo_name, $zoo_entry_fee)
    {
        $this->name = $zoo_name;
        $this->entry_fee = $zoo_entry_fee;
    }

    function info_entry_fee(Human $human)
    {
        if ($human->age <= 5) {
            print($human->name . "さんの入場料金は " . $this->entry_fee["infant"] . " 円です。" . PHP_EOL);
        } elseif ($human->age <= 12) {
            print($human->name . "さんの入場料金は " . $this->entry_fee["children"] . " 円です。" . PHP_EOL);
        } elseif ($human->age <= 64) {
            print($human->name . "さんの入場料金は " . $this->entry_fee["adult"] . " 円です。" . PHP_EOL);
        } elseif ($human->age <= 120) {
            print($human->name . "さんの入場料金は " . $this->entry_fee["senior"] . " 円です。" . PHP_EOL);
        }
    }
}

$zoo = new Zoo("旭山動物園", ["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach ($humans as $human) {
    $zoo->info_entry_fee($human);
}

//Q21 FizzBuzz問題の応用問題です。次の仕様、条件を満たすコードを書いて下さい。

// 1から30までの正の整数で
// 3の倍数でFizzを出力
// 5の倍数でBuzzを出力
// 7の倍数でHogeを出力
// それ以外は数値を出力
//但し15はFizzBuzz, 21はFizzHogeなど、公倍数は複数単語が出力されるようにすること。

// $num = 0;

// for($i = 1; $i <=30; $1++) {
//     if ($i % 3 === 0) {
//         echo 'Fizz';
//     }elseif($i % 5 === 0){
//         echo 'Buzz';
//     }elseif($i % 7 === 0){
//         echo 'Hoge';
//     }elseif($i % 3 === 0) && ($i >= 15){
//         echo 'FizzBuzz';
//     }elseif($i % 7 === 0 ) && ($i >= 21)
//         echo 'FizzHoge';
//     }else{
// 　       foreach (range(1, 30) as $i) {
//         echo $i, PHP_EOL;
//     }
//     }


for ($i = 1; $i <= 30; $i++) {
    if ($i % 105 == 0) {
        echo 'FizzBuzzHoge' . PHP_EOL;
    } elseif ($i % 35 == 0) {
        echo 'BuzzHoge' . PHP_EOL;
    } elseif ($i % 21 == 0) {
        echo 'FizzHoge' . PHP_EOL;
    } elseif ($i % 15 == 0) {
        echo 'FizzBuzz' . PHP_EOL;
    } elseif ($i % 7 == 0) {
        echo 'Hoge' . PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo 'Buzz' . PHP_EOL;
    } elseif ($i % 3 == 0) {
        echo 'Fizz' . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}
