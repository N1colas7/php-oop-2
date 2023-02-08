<?php

include __DIR__.'/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP-OOP-2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) { ?>
                <div class="col-sm-4">
                <pre>
                    <?php var_dump($product)?>
                </pre>
                </div>
            <?php } ?>    
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>