<?php

require_once('../db.php');

$createAutos = $conn->prepare("CREATE TABLE autos (id INT(11) AUTO_INCREMENT PRIMARY KEY,
kenteken VARCHAR(45) NOT NULL,
merk VARCHAR(45) NOT NULL,
type VARCHAR(45) NOT NULL,
km INTEGER (11) NOT NULL,
klanten_id INT(11),
FOREIGN KEY (klanten_id) REFERENCES klanten (id))");

$createAutos->execute();