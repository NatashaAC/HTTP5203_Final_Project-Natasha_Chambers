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
            <h1>View all the Different Cat Breeds</h1>
            <div class="catBreeds container overflow-hidden">
                <div class="row row-cols-md-4 gy-4">
                    <?php include "../apis/thecatapi.php"; ?>
                </div>
            </div>
        </main>
        <?php require_once "shared/footer.php"; ?>
    </body>
</html>