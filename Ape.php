<?php

require_once("Ape.php");
class Ape extends Animal{
    public $legs = 2;
    public $cold_blooded = "no";

    public function yell($sound){
        echo "Yell : " . $sound;
    }
}

?>