<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP 4711 Class List</title>
    </head>
    <body>
        <h1>COMP 4711 Class List</h1>
        
        <?php
        include('student.php');

        $students = array();    // creates students array
        
        $first = new Student(); // adds first student
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();    // adds second student
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $third = new Student();     // adds third student
        $third->surname = "Tangeman";
        $third->first_name = "Kevin";
        $third->add_email('home', 'kevint@kt.ca');
        $third->add_email('work', 'ktanageman@work.com');
        $third->add_grade(90);
        $third->add_grade(80);
        $students['k789'] = $third;

        ksort($students);   // one of the many sort functions 
        
        foreach($students as $student)  // displays each student in the array
            echo $student->toString();

        ?>
    </body>
</html>
