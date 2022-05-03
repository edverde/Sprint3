<?php 

class Tigger_singleton {
    //atributs
    private static $instances;
    private static $count= 0;
    //constructor
    private function __construct(){

        echo "Acabo de neixer... i el <br>";
    }
    //mètodes
    static function getInstance(){

        if (!isset(self::$instances)) {
            self::$instances = new static();
        }

        return self::$instances;
    }
    function getcounter(){

        return self::$count;
    }
    function roar() {

        echo "Grrr!<br>";
        self::$count++;
    }
}
?>