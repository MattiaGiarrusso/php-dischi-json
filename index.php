<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- cdn link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dischi Json</title>
    <!-- cdn vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- cdn axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="ms-bg-body">
    <div id="app">

        <header class="d-flex align-items-center">
            <div class="container ms-logo">
                <img src="img/spotify_logo.png" alt="logo.alt">
            </div>
        </header>

        <main>
            <div class="ms-container mt-5 d-flex flex-wrap py-5">
            
            <div class="ms-card bg-dark card" v-for="disc in discs">
                <img :src="disc.poster" class="card-img-top" >
                <div class="card-body text-center text-light">
                    <h5 class="card-title">{{ disc.title }}</h5>
                    <h6 class="card-subtitle mb-2 text-dark-subtitle">{{ disc.author }}</h6>
                    <span class="card-text">{{ disc.year }}</span>
                </div>
            </div>

            </div>
        </main>

    </div>

    <script src="js/script.js"></script>
</body>
</html>