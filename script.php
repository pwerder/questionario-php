<?php
    $json = file_get_contents('questoes.json');           
    $quest = json_decode($json);
    $acerto = 0;
    foreach($quest as $cont => $q)
    {
        $res_user = $_POST[$cont];
        $res_corr = isset($q->correct) ? $q->correct : null;
        if($res_corr == $res_user)
        {
            $acerto+=1;
        }
    }

    if (intval($acerto) >= 7)
    {
        echo "Aprovado \n";
    } else 
    {
        echo "Retido \n";
    }


    echo $acerto;
?>