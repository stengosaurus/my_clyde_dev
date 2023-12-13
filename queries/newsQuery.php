
<?php
    $news = $conn->prepare('SELECT
    title,
    description
    
    FROM News
    ');
    $news->execute();
    $news->store_result();
    $news->bind_result($titles, $description);
?>