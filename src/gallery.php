<?php

require_once 'data/users.php';


function createGallery($array, $sexe = "all", $total = "all")
{
    // je mets un varm dump pour controler mes params
    // var_dump($array, $sexe, $total);

    // Je définis une variable max qui vaut 0 (car a chaque fois que je vais mettre une photo, je vais incrémenter mon max de plus en plus)
    $max = 0;

    foreach ($array as $person) {

        if ($person['sexe'] != $sexe && $sexe != 'all') {
            continue;
        }

        if ($max == $total && $max != 'all') {
            break;
        }

        $max++;
    }
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery Photos </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary">Gallerie Femme 10</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary">Gallerie Femme 5</button>
                        </li>

                        <li class="nav-item">
                            <button type="button" class="btn btn-primary">Gallerie homme 5</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary">Toutes les photos</button>
                        </li>

        </nav>

    </header>



    <main class="container py-4">


        <div class="card" style="width: 18rem;">
            <img src="assets/img/photo_01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example</p>
                <p class="card-text">Some quick example</p>
            </div>
        </div>

        <!-- FOREACH pour afficher les photos des gens -->
        <?php

        createGallery($users, 'Femme', 10);

        createGallery($users, 'Femme', 5);

        createGallery($users, 'Homme', 5);

        createGallery($users);

        foreach ($users as $u): ?>
            <div>
                <div><img src="" alt="photo des gens"></div>
            </div>

        <?php endforeach ?>

    </main>

    <footer class="bg-dark text-white text-center mt-auto py-4">
        <p class="m-3">Afpa 2K25 - SuperGlobale - Session</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>