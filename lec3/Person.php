<?php

class Person{
    private $id;
    public $name;
    protected $age;
    protected $gender;
    public static $title;
    public $params =[];

    public function __construct($name,$age,$gender=null){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    // public function __destruct(){
    //     echo "obj. Deleted! ";
    // }

    // public function __toString(){
    //     return "This is obj.";
    // }

    public function __set($name , $value){
        $this->params[$name]=$value;
        return $this;

    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
        return $this;
    }

    public function getGernder(){
        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }
    
    public function getTitle(){
        return Person::$title;
        self::$title;
        static::$title;
    }
}

// $person = new Person('Aya','20');
$person = new Person();

$person->name = "Aya";
$person->setAge('20')->setGender('Female');
// $person->text="abdullah";
// echo $person->text;
// $person2 = &$person;
$person2 = clone $person;
$person2->name = "Ali";

// $person->setAge = ('20');
// $person->setGender = ('Female');

var_dump($person , $person2);
// echo $person;
?>