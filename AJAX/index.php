<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   
    <div class="df" id="app">
            <header class="main-header">
                <div class="container df">
                    <img class="logo" src="./img/logo.png" alt="spotify-logo">
                    <div class="search">
                        <label for="search">Search by artist: </label>
                        <select 
                            name="search"  
                            id="search" 
                            v-model="filterArtist" 
                            @change="getFiltered"
                        >
                            <option selected value="all">All</option>
                            <option v-for="artist in artists" :value="artist">{{ artist }}</option>
                        </select>
                    </div>
                </div>
            </header>
            <main class="main-content">
                <div class="card-container container df">
                    <div v-for="album in albums" class="card df">
                        <img :src="album.poster" :alt="album.title">
                        <div class="album-info">
                            <h3>{{ album.title }}</h3>
                            <p>{{ album.author }}</p>
                            <h3>{{ album.year }}</h3>
                            <p>{{ album.genre }}</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>