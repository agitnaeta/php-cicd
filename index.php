<?php 

    include 'vendor/autoload.php';
    use Carbon\Carbon;

    $time = Carbon::now();
    echo "Waktu Sekarang: ".$time->format("Y-m-d/m/y H:i");