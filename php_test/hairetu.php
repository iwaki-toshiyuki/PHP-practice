<?php

//配列 1行
$array = [1,2,3];

$array_2 = [
  ['赤','青','緑'],
  ['緑','白','黒']
];

echo $array[0];

echo '<pre>';
var_dump($array_2);
echo $array_2[1][2];
echo '</pre>';

//連想配列

$array_member = [
  'name' => '岩木',
  'height' => 172,
  'hobby' => 'YouTube'
];//

echo $array_member['name'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member2 = [
  '岩木' => [
    'height' => 172,
    'hobby'  => 'YouTube'
  ],

  '小山' => [
    'height' => 170,
    'hobby'  => 'YouTube'
  ]
  ];

echo $array_member2['岩木']['height'];

echo '<pre>';
var_dump($array_member2);
echo '</pre>';

$array_member3 = [
  '1組' => [
  '岩木' => [
    'height' => 172,
    'hobby'  => 'YouTube'
  ],

  '小山' => [
    'height' => 170,
    'hobby'  => 'YouTube'
  ]
  ],

  '2組' => [
    '佐藤' => [
      'height' => 168,
      'hobby'  => 'YouTube'
    ],

    '橋本' => [
      'height' => 170,
      'hobby'  => 'YouTube'
    ]
  ],
];

echo $array_member3['2組']['佐藤']['height'];

echo '<pre>';
var_dump($array_member3);
echo '</pre>';

?>
