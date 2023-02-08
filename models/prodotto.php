<?php 

    class prodotto{
        public $product_name;
        public $price;
        public $image;
        public $category;

        public function __construct($name,$price,$image,categoria $category){
            $this->product_name = $name;
            $this->price = $price;
            $this->image = $image;
            $this-> category = $category;
        }
    }

?>