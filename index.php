<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi json</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    
    <div id="app">
        <header>
            <div class="container d-flex aligt-items-center">
                <i class="fa-brands fa-spotify"></i>
            </div>

            <div class="overflow-auto">

                <div class="container">

                    <div class="row row-cols-3 px-5">

                        <div :v-for=" (disk, index) in dischi " :key=" index " class="col p-4">

                            <div class="card text-center">

                                <img :src="disk.poster" class="pt-4 px-5" alt="Cover">

                                <div class="card-body">
                                    <h5 class="card-title"> {{ disk.title }} </h5>
                                    <p class="card-author"> {{ disk.author }} </p>
                                    <h5 class="card-year"> {{ disk.year }} </h5>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>

    </div>
    <script src="js/script.js"></script>
   
    <?php
    include ".server.php";
    ?>


</body>
</html>