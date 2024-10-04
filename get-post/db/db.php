<?php
$users = [
    [
        "id"=> 1,
        'name' => 'Will Smith',
        'user' => 'admin',
        'password' => 'admin'
    ],
    [
        'id'=> 2,
        'name' => 'Victor Eduardo',
        'user' => 'admin2',
        'password' => 'admin2'
    ]
];

if (isset($_COOKIE['posts'])){
    $posts = json_decode($_COOKIE['posts'],true);
}
else{
    $posts = [];
}