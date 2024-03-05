<?php

//変数(動的型付け)

//先頭は英文字かアンダバー
$test_1 = 123;
$test_2 = 'testです。';

$test_3 = $test_1.$test_2;

// 配列　オブジェクト　コレクション型
var_dump($test_3);

//echo $test;

//定数　変わらない数・文字

const MAX = 10;

echo MAX;

?>
