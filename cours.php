<?php
class Student
{

    public $name;
    public $class;

    function __construct($name, $class)
    {
        $this->class = $class;
        $this->name = $name;
    }

    function printDetails()
    {
        echo "$this->name is studying in $this->class class." . PHP_EOL;
    }
}

$Student = new Student("John Smith", "1st");

$Student->printDetails();

/*
 *
 * Modifier la classe Student qui initialise les propriétés lors de l'instantation de l'objet.
 * Ensuite instancier l'objet avec les valeurs de nom 'John, Smith' et la classe '1st'
 *
 */