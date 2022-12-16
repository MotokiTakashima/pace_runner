<?php
$distance = $_POST['distance'];
$pace = $_POST['pace'];
$tArry = explode(":",$time);
$date = $pace * $distance;
$date = date("Y/m/d H:i:s",$pace);
$paceDistance = $_POST['paceDistance'];
$targetTime = $_POST['targetTime'];
$goalTime = MultTime($pace,$distance);
$time = $pace * $paceDistance;
echo "総距離 ", $distance, "km。<br>";
echo "ペース、km/", $distance, "分<br>";
echo "タイム ", $goalTime, "km。<br>";
function MultTime($time,$kake){
    $tArry=explode(":",$time);
    $secnd=round($tArry[1]/60,2);//秒→分
    $mins=$tArry[0]+$secnd;
    $ans= $mins*$kake*60;//割合いを掛け算して秒に変換
    
    return date("H:i:s",mktime(0,0,$ans));
    }
?>