<?php
    for ($pokemon=1; $pokemon <= 5; $pokemon++) { 

        $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
        curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($api);
        curl_close($api);

        $json = json_decode($response);

        echo '<li class="card">';

        echo '<img class="card-image" src="https://pokeres.bastionbot.org/images/pokemon/';
        echo $json->id;
        echo '.png"> <br>';

        echo '<h2 class"card-title">';
        echo $json->id;
        echo '. ';
        echo $json->forms[0]->name;
        echo '</h2>';

        echo '<p class="card-subtitle">';
        foreach($json->types as $k => $v) {
            echo "<h5>";
            echo $v->type->name;
            echo "</h5>";
        }
        echo '</p>';

    }
?>