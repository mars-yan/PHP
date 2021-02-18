<?php

class Product
{
    private $name;
    private $price;
    private $category;

    public  function getName()
    {
        return $this->name;
    }

    public  function getPrice()
    {
        return $this->price;
    }

    public  function getCategory()
    {
        return $this->category;
    }

    function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        //$this->show();
    }

    function show(){
        echo $this->name." стоит ".$this->price." рублей <br>";
    }
    function sell(){
        echo $this->name." продан за ".$this->price." рублей <br>";
    }
}

//$prod1 = new product(AMD100, 1000, pc);
//$prod2 = new product(ZenNote, 890, notebook);
//$prod3 = new product(Smartphone, 450, phone);
//$prods = [$prod1,$prod2,$prod3];