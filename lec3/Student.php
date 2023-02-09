<?php
include __DIR__ .'/Person.php';
class Student extends Person {
    protected $cources = [];
    public function __construct(){
        parent::__construct($cources,$name,$age,$gender);
        $this->cources = $cources;
    }
    public function setCources($cource){
        $this->cources[] = $cource;
    }
    public function getCources(){
        return $this->cources;
    }
    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }
}

$student = new Student('Laravel','Aya','20','Female');
// $student->name = "Aya";
// $student->setAge('20')->setGender('Female');

var_dump($student);