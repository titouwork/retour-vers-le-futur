<?php
$presentTime = new DateTime();
$destinationTime = clone $presentTime;
$destinationTime = $destinationTime ->modify('+10000 minutes');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>
    <h1>QUEST: Retour vers le futur</h1>
    <h2>Present Time</h2>
    <?=  $presentTime -> format('M d Y g:i A'); ?>

    <h2>Destination Time</h2>
    <?=  $destinationTime -> format('M d Y g:i A'); ?>

    <br>
    <br>
    <p>ps: me jugez pas sur l'absence de CSS, je suis en retard niveau quête :D </p>

</body>
</html>