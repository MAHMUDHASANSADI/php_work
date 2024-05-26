<?php

//class define

class Human{

    //property define
    public $name;

    //method define
    function sayHi(){
        echo "assalamuwalaikun\n";
    }
    function sayName(){
        echo "my name is {$this->name}";
    }
}

class Cat{

        //method define

    function sayHi(){
        echo "mew\n";
    }
}

class Dog{

        //method define

    function sayHi(){
        echo "ghew";
    }
}


//object define
$h1= new Human();
$h2= new Human();
$h1->name="sadi\n"; //set property
$h2->name="moushe\n"; //set property
$c1= new Cat();
$d1= new Dog();

//method call
$h1->sayHi();
$h1->sayName();

$h2->sayHi();
$h2->sayName();
$c1->sayHi();
$d1->sayHi();

