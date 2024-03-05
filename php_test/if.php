<?php

// if(条件){
// 条件が真なら実行
// }

 $height = 90;

//  if($height >= 91) {
//   echo '身長は' . $height . 'cmです';
//  }

// if ($height <= 90) {
//   echo '身長は' . $height . 'cmではありません';
//  }

 if($height !==90){ // 型が同じかどうか
    echo '身長は90cmではありません';
 }


 //== 一致
 //=== 型も一致

 $signal = 'blue';

 if ($signal === 'red') {
  echo '止まれ';
 }else if ($signal === 'yellow'){
  echo '一時停止';
 }else{
  echo '進む';
 };

 echo '<br>';

 $speed = 80;

 if($signal === 'blue'){
  if($speed >= 90){ //ネスト
    echo 'スピード違反';
  }
 };

 //データが入っているかどうか
 // isset empty is_null

 $test = '1';

 if(!empty($test)){
  echo '変数は空ではない';
 }

 // ANDとOR
 // AND &&
 // OR ||

 //三項演算子

 // if else
   //条件 ? 真 :偽

  $math = 80;

  $comment = $math > 80 ? 'good' : 'not good';

  echo $comment;

?>
