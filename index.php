<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">


</head>
<body>
<div id="app">
    
    <header class="d-flex align-items-center justify-content-between ">
        <div class="logo">
            <a href="#"><img src="img/Spotify-logo-500x281-1.webp" alt=""></a>
        </div>
        <div>
            <span>Collezione Dischi</span>
        </div>
    </header>

    <main>
        <div class="container text-center" >
            <div class="row">
                <div class="col-4 disk-card" v-for="dischi in listaDischi">
                    <img :src="dischi.img" alt="">
                    <div class="text-center name-disk">{{ dischi.name }}</div>
                    <div class="text-center author-disk">{{ dischi.author }}</div>
                    <div class="text-center year-disk">{{ dischi.year }}</div>
                </div>
            </div>
        </div>
    </main>
    
</div>


<!-- vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- javascript -->
<script src="main.js"></script>
</body>
</html>

