<?php
header('Content-Type: application/json; charset=utf-8');

$list = [
    [
        'id' => 1,
        'name' => 'Amy',
        'class' => 'A',
        'score' => 95
    ],
    [
        'id' => 2,
        'name' => 'Ben',
        'class' => 'A',
        'score' => 88
    ],
    [
        'id' => 3,
        'name' => 'Cody',
        'class' => 'B',
        'score' => 92
    ]
];

echo json_encode([
    'msg' => 'PHP 資料已送出',
    'list' => $list
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
