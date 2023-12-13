<?php 
    $events = $conn->prepare('SELECT
    date,
    description
    
    FROM Event
    ');
    $events->execute();
    $events->store_result();
    $events->bind_result($date, $description);
?>