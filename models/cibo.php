<?php 

    class cibo extends prodotto{
        public $weigth;
        public $ingredients;

        public function __construct($name, $price , $image , categoria $category, $weigth , $ingredients){
        parent::__construct($name, $price, $image, $category);
        $this->weigth = $weigth;
        $this->ingredients = $ingredients;
        }
    }

?>