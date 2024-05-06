<?php

    header('Content-Type: application/json');

    //json_decode() traduce una stringa da formato json in una variabile PHP
    $disk = json_decode(file_get_contents('disks.json'), true);

    echo json_encode($disks);
?>