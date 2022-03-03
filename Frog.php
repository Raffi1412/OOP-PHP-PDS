<?php

require_once("Frog.php");
class Frog extends Animal{
    public $legs = 4;
    public $cold_blooded = "no";

    public function jump($sound){
        echo "Jump : " . $sound;
    }
}

?>