<?php

require_once('../db.php');
// 5 auto's
$kenteken = ['04-JDK-9', '37-TVR-1', '67-YB-44', '95-RP-LR', 'HV-GB-23'];
$merk = ['Volkswagen', 'Opel', 'Tatra', 'Fiat', 'Jaguar'];
$type = ['Polo', 'Corsa', '603', 'Doblo', 'XJ6'];
$km = [4087, 80544, 309872, 143989, 2043439];
$klantID = [3, 2, 1, 1, 1];

$countauto = count($kenteken);

for ($i = 0; $i < $countauto; $i++) {
    $insertAuto = $conn->prepare('INSERT INTO autos (kenteken, merk, type, km, klanten_id) VALUES (:kenteken, :merk, :type, :km, :klanten_id)');
    $insertAuto->bindParam(':kenteken', $kenteken[$i]);
    $insertAuto->bindParam(':merk', $merk[$i]);
    $insertAuto->bindParam(':type', $type[$i]);
    $insertAuto->bindParam(':km', $km[$i]);
    $insertAuto->bindParam(':klanten_id', $klantID[$i]);
    $insertAuto->execute();
}