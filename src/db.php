<?php

    // If you installed via composer, just use this code to require autoloader on the top of your projects.
    require 'vendor/autoload.php';

    // Using Medoo namespace
    use Medoo\Medoo;

    // Initialize
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => getenv('DATABASE_NAME'),
        'server' => getenv('DATABASE_ADDRESS'),
        'port' => getenv('DATABASE_PORT'),
        'username' => getenv('DATABASE_USERNAME'),
        'password' => getenv('DATABASE_PASSWORD')
    ]);

    // Enjoy
    $database->insert('account', [
        'user_name' => 'foo',
        'email' => 'foo@bar.com'
    ]);

    $data = $database->select('account', [
        'user_name',
        'email'
    ], [
        'user_id' => 50
    ]);

    echo json_encode($data);