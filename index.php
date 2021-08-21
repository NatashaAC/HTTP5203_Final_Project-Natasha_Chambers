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
        <link rel="stylesheet" href="css/main.css">
        
        <title>Final Api Project</title>
    </head>
    <body>
        <?php require_once "views/shared/header.php"; ?>
        <main id="page">
            <h1>Cat Information</h1>
            <section>
                <div id="catSlideShow" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#catSlideShow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#catSlideShow" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#catSlideShow" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#catSlideShow" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#catSlideShow" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <!-- All pictures are from https://www.pexels.com/ -->
                        <div class="carousel-item">
                            <img src="images/group_of_cats.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/cats_sleeping.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/grey_cat_on_bed.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/group_of_kittens.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/grey_white_cat.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#catSlideShow" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#catSlideShow" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
        </main>
        <?php require_once "views/shared/footer.php"; ?>
    </body>
</html>