<html>
    <head>    
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="card centered jumbotron container pt-3 my-4" style="width:330px; ">
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
                    echo "Situação do aluno: Aprovado \n";
                } else 
                {
                    echo "Situação do aluno: Retido \n";
                }

                echo "<br>";
                echo "Numero de questões corretas: ".$acerto."/10";
            ?>
        </div>    
    </body>
</html>