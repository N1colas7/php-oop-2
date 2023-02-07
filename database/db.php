<?php
    include __DIR__. '/../models/prodotto.php'
    include __DIR__. '/../models/gioco.php'
    include __DIR__. '/../models/accessorio.php'
    include __DIR__. '/../models/cibo.php'
    include __DIR__. '/../models/categoria.php'

    //creo l'array di categorie
    $categories = [
        'cane' => new categoria('cane', '<i class="fa-solid fa-dog"></i>'),
        'gatto' => new categoria('gatto', '<i class="fa-solid fa-cat"></i>'),
        'uccello' => new categoria('uccello', '<i class="fa-solid fa-dove"></i>'),
        'pesce' => new categoria('pesce', '<i class="fa-solid fa-fish"></i>'),
    ]

    //creo array dei prodotti
    $products = [
        new Cibo('Royal Canin Mini Adult',35.99,'https://picsum.photos/id/237/200/300',$categories['cane'], 10 , ['Tacchino','Pollo']), 
        
        new Cibo('Almo Nature',44.99,'https://picsum.photos/id/237/200/300',$categories['cane'], "600g" , ['manzo','cereali']), 
        
        new Cibo('Almo Nature',34.99,'https://picsum.photos/id/237/200/300',$categories['gatto'], 400 , ['Tonno','pollo' , 'prosciutto']), 
        
        new accessorio('Voliera Wilma in lengo',150, 'https://picsum.photos/id/237/200/300',$categories['uccello'], 'Legno','60x60x60'),
        
        new accessorio('Cartucce filtranti per filtro Easy FIlter',34, 'https://picsum.photos/id/237/200/300',$categories['pesce'], 'Materiale Espanso','ND'),

        new Gioco('Kong',15, 'https://picsum.photos/id/237/200/300',$categories['cane'],'Galleggia e rimbalza', '8.5cm x 10cm'),
        
        new Gioco('Topini di peluche TRixie',15, 'https://picsum.photos/id/237/200/300',$categories['gatto'],'Morbido con codina in corda', '8.5cm x 10cm'),
    ]
?>