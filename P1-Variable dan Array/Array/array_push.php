<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Push</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        $tims = ['eric', 'john', 'james', 'jeff'];
        array_push($tims, 'jason', 'jimmy');
        foreach ($tims as $t) {
            echo $t.'<br>';
        }
    ?>
</body>
</html>