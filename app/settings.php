<?php

return [
    'settings' => [
        'displayErrorDetails' => 1,
        // DB settings
        'database'            => [
            'host'     => 'localhost',
            'username' => '',
            'password' => '',
            'db'       => '',
            'port'     => 3306,
            'prefix'   => '',
            'charset'  => 'utf8',
        ],
        // View settings
        'view'                => [
            'path'      => __DIR__ . '/template',
            'extension' => 'php'
        ],
    ],
];
