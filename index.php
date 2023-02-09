<?php

include __DIR__.'/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP-OOP-2</title>
</head>
<body>
    <div class="container red">
        <div class="row">
            <?php foreach($products as $product) { ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="<?php echo $product->image;  ?> " class="img-fluid img-cont" />
                        <h4><?php echo $product->product_name; ?> </h4>
                        <p> Prezzo : $<?php echo $product->price; ?></p>
                        <p>
                            <?php if(isset($product->weigth)){
                                 echo "Peso netto:".$product->weigth."<br/>";;
                            };

                             if(isset($product->ingredients)){
                                 foreach($product->ingredients as $ingredients)
                                 echo "Ingredienti:".$ingredients."<br/>";;
                            };

                             if(isset($product->material)){
                                echo "Materiale:".$product->weigth."<br/>";;
                            };

                             if(isset($product->size)){
                                echo "Dimensioni:".$product->size."<br/>";;
                            }; 
                             if(isset($product->features)){
                                echo "Dimensioni".$product->features."<br/>";;
                            }; 
                            ?>
                        </p>
                    </div>
                </div>
            <?php } ?>    
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>