<?php
    
    define('CATFACT_URL', 'https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount=2');

    $CATAPI = array(
        'redirect_uri' => 'http://localhost:81/xml_web_services/HTTP5203_Final_Project-Natasha_Chambers/views/facts.php',
        'state' => 'http://localhost:81'
    );

    displayCatFact($CATAPI);

    function displayCatFact($config) {
        $url = CATFACT_URL;
        $headers = array(
            "Content-Type:application/json"
        );

        $opts = array(
            'http' => array(
                'header' => $headers,
                'method' => 'GET'
            )
        );

        $context = stream_context_create($opts);
        $results = json_decode(file_get_contents($url, false, $context));

        var_dump($results);

        echo '<h2>' . $results->text . '</h2>';
    }