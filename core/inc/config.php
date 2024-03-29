<?php
/*
 * This is where configuration information is stored about the framework. We can add extra options such as the PDO error mode,
 * PDO timeout, or any other attributes that may be useful.
 */
return [
    'database' => [
        'name' => 'people',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ],
    'options' => [
        'debug' => true,
        'production' => false,
        'array_routing' => false
    ]
]
?>
