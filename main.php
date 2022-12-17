<?php
// 総距離
$distance = $_POST['distance'];
// ペース
$pace = $_POST['pace'];
// 時間を分と秒に分ける
$tArry = explode(":",$time);
// 何キロまでペースを維持するか
$paceDistance = $_POST['paceDistance'];
// 目標タイム
$targetTime = $_POST['targetTime'];
// 目標タイムを秒に変換
if ($targetTime = 3) {
    $seconds = 10800;
}elseif($targetTime = 3.5) {
    $seconds = 12600;
}elseif($targetTime = 4) {
    $seconds = 14400;
}elseif($targetTime = 4.5) {
    $seconds = 16200;
}elseif($targetTime = 5) {
    $seconds = 18000;
}
// ゴールタイム
$goalTime = MultTime($pace,$distance);
// 総距離から維持するペースの距離を引いた残り
$residue = $distance - $paceDistance;

echo "総距離 ", $distance, "km。<br><br>";
echo "ペース、km/", $pace, "分<br>";
echo "何キロまで？ ", $paceDistance, "km。<br>";

echo "残り距離 ", $residue, "km。<br><br>";
echo "目標タイム ", $targetTime, "時間切り<br>";
echo "タイム ", $goalTime, "<br>";
function MultTime($time,$kake){
    $tArry=explode(":",$time);
    $secnd=round($tArry[1]/60,2);//秒→分
    $mins=$tArry[0]+$secnd;
    $ans= $mins*$kake*60;//割合いを掛け算して秒に変換
    
    return date("H:i:s",mktime(0,0,$ans));
    }
?>