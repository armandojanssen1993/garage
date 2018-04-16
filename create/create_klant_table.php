<?php

require_once('../db.php');

$createKlanten = $conn->prepare("CREATE TABLE klanten (id INT(11) AUTO_INCREMENT PRIMARY KEY,
naam VARCHAR(45) NOT NULL,
adres VARCHAR(45) NOT NULL,
postcode VARCHAR(45) NOT NULL,
plaats VARCHAR(45) NOT NULL)");

$createKlanten->execute();