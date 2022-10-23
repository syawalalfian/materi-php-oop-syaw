<?php
    class Animal2 {
        public $name;
        public $legs;
        public $cold_blooded;

        function __construct($name, $legs, $cold_blooded)
        {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;          
        }   
        public function jenis(){
            echo "Name :" . $this->name . "<br>", 
             "Legs :" . $this->legs . "<br>",
             "Cold Blooded :" . $this->cold_blooded . "<br>";
       }
        }
        class Frog extends Animal2 {
        public $yell;

        function __construct($Jump){
            $this->Jump = $Jump;
        }
        public function lompat(){
            echo "Jump :" . $this->Jump;
        }
        }

        $Kodok = new Animal2("Bongkang", "4", "no");
        $Kodok->jenis();

        $Katak = new Frog ("Kwak Kwak Kwak");
        $Katak->lompat();
?>