<?php
    require_once('./driver.php');

    $database = getDatabase();

    // Enjoy
    $database->insert('account', [
        'user_name' => 'foo',
        'email' => 'foo@bar.com'
    ]);

    $data = $database->select('account', [
        'user_name',
        'email'
    ], [
        'user_name' => 'foo'
    ]);

    echo json_encode($data);