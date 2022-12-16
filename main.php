<?php
$distance = $_POST['distance'];
$pace = $_POST['pace'];
$tArry = explode(":",$time);
$date = $pace * $distance;
$date = date("Y/m/d H:i:s",$pace);
$paceDistance = $_POST['paceDistance'];
$targetTime = $_POST['targetTime'];
$time = $pace * $paceDistance;
var_dump($time);
echo "総距離", $distance, "km。";
echo "ペース、km/", $distance, "分";
echo "総距離", $distance, "km。";
?>