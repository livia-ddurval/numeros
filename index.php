<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Index</title>
</head>

<body>
    <section>
    <div>
    <?php
     $num = 1437.25;
    echo ('R$'.$num) 
    ?>
    <BR></BR>
    <?php 
     $data = date("Y:m:d");
     $formatar = date("d/m/y". strtotime($data));
    echo $formatar
    ?></div>
    </section>
</body>
</html>