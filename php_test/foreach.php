<?php
  // 複数の値 foreach

  $members = [
    'name' => '岩木',
    'height' => 170,
    'hobby' => '野球'
  ];

  //バリューのみ表示
  foreach($members as $member){
    echo $member;
  }

  echo '<br>';

  //キーとバリューそれぞれ表示
  foreach($members as $key => $value){
    echo $key . 'は' .  $value . 'です';
  }
?>
