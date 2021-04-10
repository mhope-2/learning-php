<?php

require_once "Person.php";

class Student extends Person
{

    public string $studentId;

     public function __construct($fname, $lname, $studentId)
     {
         $this->studentId = $studentId;
         parent::__construct($fname, $lname);
     }

}