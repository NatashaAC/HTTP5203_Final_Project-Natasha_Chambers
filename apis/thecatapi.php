<?php
    // The Cat API
    define('THECATAPI_URL', 'https://api.thecatapi.com/');

    $CATAPI = array(
        'client_id' => '3e3d2b3d-c8a2-416a-8809-e09f7b86ac9f',
        'redirect_uri' => 'http://localhost:81/xml_web_services/HTTP5203_Final_Project-Natasha_Chambers/views/breeds.php',
        'state' => 'http://localhost:81'
    );

    displayCatInfo($CATAPI);

    function displayCatInfo($config) {
        $url = THECATAPI_URL . 'v1/breeds';
        $headers = array(
            "Content-Type:application/json",
            "x-api-key:$config[client_id]"
        );

        $opts = array(
            'http' => array(
                'header' => $headers,
                'method' => 'GET'
            )
        );

        $context = stream_context_create($opts);
        $results = json_decode(file_get_contents($url, false, $context));

        // var_dump($results);

        foreach ($results as $breed) {
            echo '<div class="col">
                    <div class="card h-100">
                        <div class="card-header">' . $breed->origin . '</div>
                        <img class="card-img-top" src="' . $breed->image->url . '" alt="' . $breed->name . '">
                        <div class="card-body">
                            <h4 class="card-title">' . $breed->name . '</h4>
                            <p class="card-text">' . $breed->description . '</p>
                            <a class="btn btn-outline-info" href="breed_details.php?name=' . $breed->name . '">View More</a>
                        </div>
                    </div>
                 </div>';
        }
    }