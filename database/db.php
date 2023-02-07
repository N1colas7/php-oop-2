<?php
    include __DIR__. '/models/prodotto.php'
    include __DIR__. '/models/gioco.php'
    include __DIR__. '/models/accessorio.php'
    include __DIR__. '/models/cibo.php'
    include __DIR__. '/models/categoria.php'

    //creo l'array di categorie
    $categories = [
        'cane' => new categoria('cane', '<i class="fa-solid fa-dog"></i>'),
        'gatto' => new categoria('gatto', '<i class="fa-solid fa-cat"></i>'),
        'uccello' => new categoria('uccello', '<i class="fa-solid fa-dove"></i>'),
        'Pesce' => new categoria('Pesce', '<i class="fa-solid fa-fish"></i>'),
    ]
?>