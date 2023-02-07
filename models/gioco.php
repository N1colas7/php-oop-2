<?php 

    class gioco extends prodotto{
        public $size;
        
        public function __construct($name, $price , $image , categoria $category, $size){
            parent::__construct($name, $price, $image, $category);
            //sopra é come riscrivere il construct di prodotto.php 
            $this->size = $size;
        }
    }

?>