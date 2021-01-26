<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title>Discs</title>
</head>
<body>
    <div id="app">
        <?php include __DIR__ . '/partials/header.php' ?>
        
        <div class="centered">
            <select v-model="genre" @change="filter" >
                <option value="">All</option>
                <option v-for="genre in genres">{{genre}}</option>
            </select>
            <div class="card-container">
                <div v-for="disc in discs" class="card">
                    <img :src="'img/' + disc.path" alt="">
                    <h3>{{ disc.title }}</h3>
                    <h5>{{ disc.artist }}</h5>
                    <p>{{ disc.year }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="dist/app.js"></script>
</body>
</html>