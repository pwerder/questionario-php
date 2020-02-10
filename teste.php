<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form method="POST" action="script.php">
            <?php
            
                $arr = array('a', 'b', 'c', 'd', 'e');
                $img = array("", "./img/1.jpg", "./img/2.jpg", "./img/3.jpg", "./img/4.jpg", "./img/5.jpg", "./img/6.jpg", "./img/7.jpg", "./img/8.jpg", "./img/9.jpg", "./img/10.jpg");
                $json = file_get_contents('questoes.json');
                
                $quest = json_decode($json);
            
                $cont = 1;
                $num = 0;

                foreach ($quest as $q)
                {
            ?>
                    <div class="card" style="width:400px">
                        <div class="card-body">
                            <?php
                            
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
                                $img= "./img/".$cont.".jpg";
                                echo "(Correta: $q->correct)";
                                echo "<br>";
                                                            
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