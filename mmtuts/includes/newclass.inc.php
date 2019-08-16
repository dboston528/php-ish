<?php

//a class is basiacally a big object that contains a a lot information regarding one thing

//example - you can have a class called users which contains all of the information  related to a user

// In a class variable are called properties and functions are called methods

// here is a class

class NewClass {

    //Properties and methods go here
    public $info = "This is some info";


}

// below is an example of instantiating a class which allows you access to all properties 
// and  methohds inside a class
$object = new NewClass;
//var_dump  prints everything you have in the class
var_dump($object);