<?php 

    class gioco extends prodotto{
        public $size;
        public $features;
        
        public function __construct($name, $price , $image , categoria $category, $size , $features){
            parent::__construct($name, $price, $image, $category);
            //sopra é come riscrivere il construct di prodotto.php 
            $this->size = $size;
            $this->features = $features
        }
    }

?>