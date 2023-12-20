
<?php
    $news = $conn->prepare('SELECT
    news_id,
    title,
    description
    
    FROM News
    ');
    $news->execute();
    $news->store_result();
    $news->bind_result($newsId, $titles, $description);
?>