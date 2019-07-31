<?php

class NewClass extends ParentClass {

    //Properties and methods go here
    public function name() {
        return $this->name;
    }
}

//instantiating class

$object = new NewClass; 
var_dump($object);