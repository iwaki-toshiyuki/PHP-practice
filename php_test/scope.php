<?php

$globalVariable = 'グローバル変数です';

function checkScope($str){
  $localVariable = 'ローカル変数です';
  //global $globalVariable; //globalほとんど使うことはない。
  echo $str;
}

echo $globalVariable;
//echo $localVariable;

checkScope($globalVariable);
?>
