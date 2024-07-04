<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $timestamp = date("Y-m-d H:i:s");
    $logEntry = "Timestamp: $timestamp, Latitude: $latitude, Longitude: $longitude\n";

    $file = 'locations.txt';
    file_put_contents($file, $logEntry, FILE_APPEND | LOCK_EX);
}
?>
