<?php

    // If you installed via composer, just use this code to require autoloader on the top of your projects.
    require 'vendor/autoload.php';

    // Using Medoo namespace
    use Medoo\Medoo;

    // Initialize
    function getDatabase () {
        return new Medoo([
            'database_type' => 'mysql',
            'database_name' => getenv('DATABASE_NAME'),
            'server' => getenv('DATABASE_ADDRESS'),
            'port' => getenv('DATABASE_PORT'),
            'username' => getenv('DATABASE_USERNAME'),
            'password' => getenv('DATABASE_PASSWORD')
        ]);
    }
