<?php
/* --------------- Object Oriented Programming --------------- */

/*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
    OOP consists of classes that can hold "properties" and "methods". Objects can be 
    created from classes.
*/

class User {
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }    // This method called a setter, because it sets a property 

    function get_name() {
        return $this->name;
    }    // This method called a getter, because it gets a property
}

// Instantiate a User object
$user1 = new User('Moharram', 'moharram.m98@gmail.com', '123456789');
$user2 = new User('Zar', 'z.moharrami@gmail.com', 'FGH45@7894ijO');

// Assigning values
// $user1->set_name('Moharram');
// $user2->set_name('Zar');

// echo $user1->get_name();
// echo $user2->get_name();

// echo $user1->email;
// echo $user2->name;

// Inheritance
class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@yahoo.com', '123456', 'Manager');

echo $employee1->get_title();