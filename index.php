<?php 

    include 'vendor/autoload.php';
    use Carbon\Carbon;

    $time = Carbon::now();
    echo "Hallo AGIT\r\n";
    echo "Testing update\r\n";
    echo "Waktu Sekarang: ".$time->format("Y-m-d/m/y H:i");