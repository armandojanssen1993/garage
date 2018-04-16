<?php

require_once ('../db.php');
$i = 0;
// 9klanten
$naam = ['Anjo', 'Vinod', 'Sam', 'Mo', 'Sandra', 'Kelvin', 'Saida', 'Antonic', 'Nikola'];
$adres = ['Dijkwal 145B', 'Schiphollaan 1', 'Stoopplein 45', 'Noorderweg 321', 'Hoofdweg 7', 'Celsiuslaan 273', 'Binnenweg 229', 'Hoofdstraat 54', 'Nikostraat 24'];
$postcode = ['3015CD', '3213BV', '2023KL', '2012BH', '3483MN', '4532BV', '3045HG', '2932BB', '3028NN'];
$plaats = ['Rotterdam', 'Rotterdam', 'Lekkerkerk', 'Schiedam', 'Capelle', 'Capelle', 'Rotterdam', 'Schiedam', 'Rotterdam'];

$count = count($naam);

for ($i = 0; $i < $count; $i++) {
    $insertKlant = $conn->prepare('INSERT INTO klanten (naam, adres, postcode, plaats) VALUES (:naam, :adres, :postcode, :plaats)');
    $insertKlant->bindParam(':naam', $naam[$i]);
    $insertKlant->bindParam(':adres', $adres[$i]);
    $insertKlant->bindParam(':postcode', $postcode[$i]);
    $insertKlant->bindParam(':plaats', $plaats[$i]);
    $insertKlant->execute();
}