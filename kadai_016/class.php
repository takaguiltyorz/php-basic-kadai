<?php

    class Animal {

        private $name;
        private $height;
        private $weight;


        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }





        //heght 
        public function show_height() {
            return $this->height;
          }
    

        
    };

    $dog = new Animal('dog',60,5000);

    print_r($dog);
    echo '<br>';

    echo $dog->show_height();
    

    

   
    
    

    



    class Food {

        private $names;
        private $price;


        public function __construct(string $names, int $price){
            $this-> names = $names;
            $this-> price = $price;
        }


        //price
        public function show_price() {
            return $this->price;
          }

       




    };

    $potato = new Food('potato', 250);
    echo '<br><br>';
    print_r($potato);
    echo '<br>';

    echo $potato ->show_price();










?>