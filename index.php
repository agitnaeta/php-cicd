<?php 

include 'vendor/autoload.php';
use Carbon\Carbon;

$time = Carbon::now();
echo "Hallo AGIT<br>";
echo "Testing update<br>";
echo "Waktu Sekarang: ".$time->format("Y-m-d/m/y H:i")."<br>";
