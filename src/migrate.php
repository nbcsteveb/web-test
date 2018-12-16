<?php
    require_once('./driver.php');

    $database = getDatabase();

    $create_query = "CREATE TABLE `account` (
        `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `user_name` varchar(255) NOT NULL DEFAULT '',
        `email` varchar(255) NOT NULL DEFAULT '',
        PRIMARY KEY (`user_id`),
        UNIQUE KEY `user_name` (`user_name`,`email`)
      ) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;";

    $database->query($create_query)->fetchAll();
