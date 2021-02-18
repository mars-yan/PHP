<?php

include "product.class.php";

class GamersPC extends product{
    var $power;
    function __construct($name, $price, $category,$power)
    {
        parent::__construct($name, $price, $category);
        $this->power = $power;
    }
    function show()
    {
        parent::show();
        echo $this->getName()." имеет мощность " .$this->power."<br>";
        $this->sell();
    }
}
$gamepc = new GamersPC("Alien_X56",1500,"PC", 200);
$gamepc->show();