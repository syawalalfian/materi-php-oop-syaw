<?php
    class Animal {
        public $name;
        public $legs;
        public $cold_blooded;

        function __construct($name, $legs, $cold_blooded)
        {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
        }
    }
        $sheep = new Animal ("Shaun", "4", "no" );
        echo "Name :" . $sheep->name; 
        echo "<br>";
        echo "Legs :" . $sheep->legs; 
        echo "<br>";
        echo "Cold Blooded :" . $sheep->cold_blooded; 
 ?>
  

