<?php
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