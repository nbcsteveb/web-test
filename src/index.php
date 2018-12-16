<?php
    $hostname = gethostname();
    $ip = $_SERVER['REMOTE_ADDR'];
    echo "Hello, ${ip}. I am ${hostname}.";

