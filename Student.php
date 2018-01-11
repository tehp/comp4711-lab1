<?php

// Student class
// Represents a student in a school. Manages grades and personal information
class Student {
  // Student class constructor
  function __construct() {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
  }

  // add_email: sets email attribute of a given student
  function add_email($which,$address) {
      $this->emails[$which] = $address;
  }

  // add_grade: adds a grade to a students grade array
  function add_grade($grade) {
      $this->grades[] = $grade;
  }

  // average: averages students grades to a single percent
  function average() {
    $total = 0;
    foreach ($this->grades as $value)
        $total += $value;
    return $total / count($this->grades);
  }

  // toString: returns a string representation of a students information
  function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
  }
}
