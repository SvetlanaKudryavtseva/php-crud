<?php
// $name = "Svetlana";
// $surname = "Kudryavtseva";

// echo $name; // Svetlana

// echo $surname; // Kudryavtseva

// $person = [
//     "name" => "Svetlana",
//     "surname" => "Kudryavtseva",
// ];

// echo $person['name']; // Svetlana

// function sayHello() {
//     echo 'Hello';
//     echo 'How are you?';
// }
// sayHello();

class Fruit {
    public $name = 'apple';
    public $color = 'red';
    function getColor(){
        echo $color = 'green';
    }
}

$apple = new Fruit();
echo $apple->name;
echo "<br>";
echo $apple->getColor();

class Person {
    public $name;
    public $surname = 'Code';

    function __construct($name)
    {
        echo $this->name = $name;
    }

    function sayHello(){
        echo 'Hello';
    }
}

$sveta = new Person('Sveta');
$sveta->sayHello();
?>