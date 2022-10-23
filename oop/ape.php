<?php
    class Animal1 {
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
        class Ape extends Animal1 {
        public $yell;

        function __construct($yell){
            $this->yell = $yell;
        }
        public function suara(){
            echo "Yell :" . $this->yell;
        }
        }

        $sungokong = new Animal1("Onyet", "2", "no");
        $sungokong->jenis();

        $Kera_Sakti = new Ape ("AUOOOOOO");
        $Kera_Sakti->suara();
?>