<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="centered">
            <img src="img/spotify_logo.png" alt="">
        </div>
    </header>
    <div class="centered">
        <div class="card-container clearfix">
            <?php 
                include __DIR__ . '/discs_db.php';
                foreach($discs as $disc) { ?>
                    <div class="card">
                        <img src="<?php echo "img/" . $disc["path"]?>" alt="">
                        <h3><?php echo $disc["title"] ?></h3>
                        <h5><?php echo $disc["artist"] ?></h5>
                        <p><?php echo $disc["year"] ?></p>
                    </div> 
                
            <?php } ?>
        </div>
    </div>
</body>
</html>