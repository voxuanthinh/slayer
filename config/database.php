<?php

return [

    # ------------------------------------------------------
    # - You may use sqlite, mysql, pgsql, oracle
    # ------------------------------------------------------

    'adapter' => env('DB_ADAPTER', 'mysql'),


    # ------------------------------------------------------
    # - The adapters lists
    # ------------------------------------------------------

    'adapters' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'dbname'   => base_path(env('DB_DATABASE', 'database/slayer.sqlite')),
        ],

        'mysql' => [
            'driver'   => 'mysql',
            'host'     => env('DB_HOST'    , 'localhost'),
            'port'     => env('DB_PORT'    , 3306),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'password'),
            'dbname'   => env('DB_DATABASE', 'slayer'),
            'charset'  => env('DB_CHARSET' , 'utf8'),
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => env('DB_HOST'    , 'localhost'),
            'username' => env('DB_USERNAME', 'pgsql'),
            'password' => env('DB_PASSWORD', 'pgsql'),
            'dbname'   => env('DB_DATABASE', 'slayer'),
            'charset'  => env('DB_CHARSET' , 'utf8'),
        ],

        'oracle' => [
            'driver'   => 'oracle',
            'username' => env('DB_USERNAME', 'oracle'),
            'password' => env('DB_PASSWORD', 'oracle'),
            'dbname'   => env('DB_DATABASE', '//localhost/slayer'),
            'charset'  => env('DB_CHARSET' , 'utf8'),
        ],

    ],


    # ------------------------------------------------------
    # - To enable mongo, use this configuration
    # ------------------------------------------------------

    'mongo' => [
        'enabled'  => false,
        'host'     => 'mongodb:///tmp/mongodb-27017.sock,localhost:27017',
        'dbname'   => 'slayer',
    ],
];