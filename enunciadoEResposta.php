<?php

    $json = file_get_contents('questoes.json');

    $quest = json_decode($json);

    //var_dump($quest);


    foreach ($quest as $q)
    {
        echo "<br>";
        echo " $q->enunciado ";
        echo "<br>";

        foreach($q->alternativas as $alt)
        {
            echo "$alt <br>";
        }

        echo "(Correta: $q->correct)";
        echo "<br>";
    
    }

?>