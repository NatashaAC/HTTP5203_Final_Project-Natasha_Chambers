<?php
    // Grabbing the cat breed's name and accounting for spaces
    $url = 'https://api.thecatapi.com/v1/breeds/search?q=' . str_replace(' ', '%20', $_GET["name"]);
    $results = json_decode(file_get_contents($url));

    $breed_name = $results[0]->name; 
    $breed_alt_name = $results[0]->alt_names;
    $breed_image = $results[0]->image->url;
    $breed_des = $results[0]->description;
    $breed_temp = $results[0]->temperament;
    $breed_life_span = $results[0]->life_span;
    $breed_origin = $results[0]->origin;
    $breed_weight = $results[0]->weight->imperial;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device=width, initial-scale=1" />
        <meta name="description" content="A website for all cat lovers!">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- Style Sheets -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main.css">
        
        <title>Breeds</title>
    </head>
    <body>
        <?php require_once "shared/header.php"; ?>
        <main id="page">
            <?php 
                echo '<img src="'. $breed_image .'">
                <div class="card">
                        <h1>' . $breed_name . '</h1>
                        <h2>Alternate Names: ' . $breed_alt_name . '</h2>
                        <div class="card-body">
                            <p>' . $breed_des . '</p>
                            <p>This cat breed is from ' . $breed_origin . '</p>
                            <p>Life Span: ' . $breed_life_span . ' years</p>
                            <p>Weight: ' . $breed_weight . 'lb</p>
                            <p>Temperament: ' . $breed_temp . '</p>
                        </div>
                     </div>'; 
            ?>
        </main>
        <?php include "shared/footer.php"; ?>
    </body>
</html>