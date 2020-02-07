<?php

    $json = file_get_contents('questoes.json');

    $quest = json_decode($json, true);

    var_dump($quest);

?>