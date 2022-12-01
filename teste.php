<html>
    <head>
    <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form method="POST" action="script.php">
            <?php
            
                $arr = array('a', 'b', 'c', 'd', 'e');
                $json = file_get_contents('questoes.json');                
                $quest = json_decode($json);
            
                $cont = 1;
                $num = 0;

                foreach ($quest as $q)
                {
            ?>
                    <div class="card centered" style="width:400px;">
                        <div class="card-body">
                            <?php
                            
                                //imprimindo o enunciado e o numero de questao
                                echo "<br>";
                                echo "$cont. $q->enunciado ";
                                echo "<br>";
                        
                                foreach($q->alternativas as $alt)
                                {
                                    //imprimindo perguntas e as letras
                                    echo '<input type="radio" name="'.$cont.'" value="'.$arr[$num].'" required>';
                                    echo $arr[$num].". $alt <br>";
                                    $num+=1;
                                }
            
                                $num=0;
                                $img= "./img/".$cont.".jpg";
                                                            
                            ?>       
                        </div>    
                        <?php
                            echo '<img class="card-img-bottom" src="./img/'.$cont.'.jpg" style="width:100%">';
                            $cont+=1;                 
                        ?>
                    </div>
            <?php
                }
            ?> 
            <input type="submit" value="enviar">     
        </form>
    </body>

</html>