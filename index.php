<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 1</title>
  </head>
  <body>
    <?php
    include('Student.php');

    // array to contain students
    $students = array();

    // first student
    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home','john@doe.com');
    $first->add_email('work','jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;

    // second student
    $second = new Student();
    $second->surname = "Einstein";
    $second->first_name = "Albert";
    $second->add_email('home','albert@braniacs.com');
    $second->add_email('work1','a_einstein@bcit.ca');
    $second->add_email('work2','albert@physics.mit.edu');
    $second->add_grade(95);
    $second->add_grade(80);
    $second->add_grade(50);
    $students['a456'] = $second;

    // third student
    $third = new Student();
    $third->surname = "Test";
    $third->first_name = "Student";
    $third->add_email('home','test@test.com');
    $third->add_grade(100);
    $third->add_grade(100);
    $third->add_grade(100);
    $students['a000000000'] = $third;

    // ksort students array
    ksort($students);

    // print each student with toString() method of Student class
    foreach($students as $student)
        echo $student->toString();

    ?>
  </body>
</html>
