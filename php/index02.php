<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php02</title>
</head>

<body>
    <?php
    $šalis = 'Lietuva';
    $miestas = 'Vilnius';
    $populiacija = 574221;
    ?>
    <?php
    echo '"' . $miestas . ' - ' . 'Lietuvos sostinė' . '"';
    ?>
    <hr>
    <?php echo '"'  .$miestas . ' ' . 'ir' . ' ' . $šalis . ' ' . 'sparčiai auga' . '"';
    ?>

</body>

</html>