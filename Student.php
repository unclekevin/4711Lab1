<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Kevin
 */
class Student {
    
    function __construct() {    // class constructor
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    } 
    
    function add_email($which,$address) {   // adds an email address to the emails array
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {    // adds a grade to the grades array
        $this->grades[] = $grade;
    } 
    
    function average() {    // calculates the average of all the grades in the grades array
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    function toString() {   // creates a text output
        $result = '<b><u>'.$this->first_name.' '.$this->surname.'</u></b>'."\n\n";
        $result .= "\tAverage Grade: ".$this->average()."\n";
        $result .= "\tEmail Addresses:\n";
        foreach($this->emails as $which=>$what)
            $result .= "\t\t".$which.': '. $what."\n";
        return '<pre>'.$result.'</pre>';
} 
}
