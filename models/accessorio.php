<?php 

    class accessorio extends prodotto{
        public $material;
        public $size;

        public function __construct($name, $price , $image , categoria $category, $material , $size)
        parent::__construct($name, $price, $image, $category);
        $this->material = $material;
        $this->size = $size;
    }

?>