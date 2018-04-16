<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

require_once ('db.php');

$selectAll = $conn->prepare("SELECT klanten.*, autos.* FROM klanten JOIN autos on klanten.id = autos.klant_id");
$selectAll->execute();
$results = $selectAll->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);

?>

<table>
    <tr>
        <th>
            Klant
        </th>
        <th>
            kenteken
        </th>
        <th>
            merk
        </th>
        <th>
            type
        </th>
        <th>
            kmlkfnvfdlkvn
        </th>
    </tr>
    <?php foreach ($results as $result){
        ?>
    <tr>
        <td>
            <?php echo $result['naam']; ?>
        </td>
        <td>
            <?php echo $result['kenteken']; ?>
        </td>
        <td>
            <?php echo $result['merk']; ?>
        </td>
        <td>
            <?php echo $result['type']; ?>
        </td>
        <td>
            <?php echo $result['km']; ?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>