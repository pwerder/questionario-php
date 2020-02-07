<html>
    <body>
        
        <?php
            
            $arr = array('a', 'b', 'c', 'd', 'e');

            $json = file_get_contents('questoes.json');

            $quest = json_decode($json);
        
            $cont = 1;
            $num = 0;

            foreach ($quest as $q)
            {
                //imprimindo o enunciado e o numero de questao
                echo "<br>";
                echo "$cont. $q->enunciado ";
                echo "<br>";
        
                foreach($q->alternativas as $alt)
                {
                    //imprimindo perguntas e as letras
                    echo '<input type="radio" name="'.$cont.'" value="'.$arr[$num].'">';
                    echo $arr[$num].". $alt <br>";
                    $num+=1;

    
                }

                $num=0;

                echo "(Correta: $q->correct)";
                echo "<br>";
                
                $cont+=1;
            }
            ?>        
    </body>

</html>