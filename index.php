<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dischi Json</title>
    <!-- cdn axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- cdn vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-secondary">
    <div id="app">

        <header class="bg-primary">
            <div class="container">
                <h1>SPOTIFY</h1>
            </div>
        </header>

        <main>
            <div class="container ms-container mt-5 d-flex flex-wrap">
            
            <div class="card ms-card" v-for="disc in discs">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ disc.title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ disc.author }}</h6>
                    <span class="card-text">{{ disc.year }}</span>
                </div>
            </div>

            </div>
        </main>

    </div>

    <script src="js/script.js"></script>
</body>
</html>