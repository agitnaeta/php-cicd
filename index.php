<?php 

    include 'vendor/autoload.php';
    use Carbon\Carbon;

    $time = Carbon::now();
    echo "Hallo AGIT\n";
    echo "Waktu Sekarang: ".$time->format("Y-m-d/m/y H:i");