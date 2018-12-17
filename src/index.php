<?php
    $hostname = gethostname();
    $ip = $_SERVER['REMOTE_ADDR'];
    $current_time = date('m/d/Y H:i:s e');

    echo "Hello, ${ip}. I am ${hostname}.";
    echo "<br />The time is now: ${current_time}";

