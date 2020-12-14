<?php

    for ($pokemon=1; $pokemon <= 10; $pokemon++) { 

        $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
        curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($api);
        curl_close($api);

        $json = json_decode($response);

        echo '<li class="card">';

        echo '<img class="card-image" src="https://pokeres.bastionbot.org/images/pokemon/';
        echo $json->id;
        echo '.png"> <br>';

        echo "<div class='";
        echo $json->types[0]->type->name;
        echo "'</div>";

        echo '<h2>';
        echo $json->id;
        echo '. ';
        echo $json->forms[0]->name;
        echo '</h2>';

        foreach($json->types as $k => $v) {
            echo "<h4>";
            echo $v->type->name;
            echo "</h4>";
        }

        echo "<hr>";
        echo "<h3>Abilities</h3>";
        foreach($json->abilities as $k => $v) {
            echo "<h4>";
            echo $v->ability->name;
            echo "</h4>";
        }
        
        
        
        echo '</li>';
    }
?>