<?php
    // this would be used to return all students
    $students = $conn->prepare('SELECT 
    student_num, 
    firstname,
    surname,
    email
    FROM student
    ');
    $students->execute();
    $students->store_result();
    $students->bind_result($studentNumbers, $firstnames, $surnames, $emails);

    

    // this example would be used to return a specific student
    
    $studentNum = $_SESSION['student_num'];
    $student = $conn->prepare("SELECT 
    student_num, 
    firstname,
    surname,
    email
    FROM student 
    where student_num = $studentNum
    ");
    $student->execute();
    $student->store_result();
    $student->bind_result($studentNum, $firstname, $surname, $email);
    $student->fetch();
    

    ?>