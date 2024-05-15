<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="main">
    <header class="header">
      <nav class="nav">
        <a class="nav-link" href="index.php">All</a>
        <a class="nav-link" href="read.php">Read</a>
        <a class="nav-link" href="unread.php">Unread</a>
      </nav>
    </header>
    <h1 class="display-4 text-center p-5 text-white"><?php echo $title;?></h1>
    <section class="books">
      <?php foreach ($books as $book): ?>
      <div class="book">
        <div class="book-details">
          <h2 class="book-title"><?php echo $book["title"];?></h2>
          <h3 class="book-author"><?php echo $book["author"];?></h3>

          <a class="book-link" href="<?php echo $book["url"];?>" target="_blank">Read more...</a>
        </div>
      </div>
      <?php endforeach; ?>
    </section>
  </main>
</body>
</html>