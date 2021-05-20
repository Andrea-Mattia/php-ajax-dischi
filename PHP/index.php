<?php
include_once __DIR__ . '/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="df" id="app">
        <header class="main-header">
            <div class="container">
                <img class="logo" src="./img/logo.png" alt="spotify-logo">
            </div>
        </header>
        <main class="main-content">
            <div class="card-container container df">
                <?php foreach ($database as $album) { ?>
                    <div class="card df">
                        <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
                        <div class="album-info">
                            <h3><?php echo $album['title']; ?></h3>
                            <p><?php echo $album['author']; ?></p>
                            <h3><?php echo $album['year']; ?></h3>
                            <p><?php echo $album['genre']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>

</body>
</html>