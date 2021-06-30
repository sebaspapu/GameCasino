
<style>
    
    
            #foto{
                margin: 15px;
                border: solid 10px cornflowerblue
                    
            }
            
            
            #Principal{
                                
                border: solid 1px darkseagreen;
                padding: 20px;
                width:     55%;
                margin: 20 auto;
                
            }
    
            
            legend{
                
                border: solid 2px blue;
                padding: 5px;
                font-weight: bold;
                border-width:  2px;
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#d4e4ef+0,86aecc+100;Grey+Gloss */
background: rgb(212,228,239); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(212,228,239,1) 0%,rgba(134,174,204,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(212,228,239,1) 0%,rgba(134,174,204,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d4e4ef', endColorstr='#86aecc',GradientType=0 ); /* IE6-9 */

                
            }
            
            fieldset{
/*                border: solid 2px blue;
                border-radius: 20px;*/
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#d2dfed+0,c8d7eb+26,bed0ea+51,a6c0e3+51,afc7e8+62,bad0ef+75,99b5db+88,799bc8+100;Grey+Blue+Gloss+%231 */
background: rgb(210,223,237); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(210,223,237,1) 0%, rgba(200,215,235,1) 26%, rgba(190,208,234,1) 51%, rgba(166,192,227,1) 51%, rgba(175,199,232,1) 62%, rgba(186,208,239,1) 75%, rgba(153,181,219,1) 88%, rgba(121,155,200,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(210,223,237,1) 0%,rgba(200,215,235,1) 26%,rgba(190,208,234,1) 51%,rgba(166,192,227,1) 51%,rgba(175,199,232,1) 62%,rgba(186,208,239,1) 75%,rgba(153,181,219,1) 88%,rgba(121,155,200,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(210,223,237,1) 0%,rgba(200,215,235,1) 26%,rgba(190,208,234,1) 51%,rgba(166,192,227,1) 51%,rgba(175,199,232,1) 62%,rgba(186,208,239,1) 75%,rgba(153,181,219,1) 88%,rgba(121,155,200,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2dfed', endColorstr='#799bc8',GradientType=0 ); /* IE6-9 */

            }
            
            
            body{
                
                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#d8e0de+0,aebfbc+22,99afab+33,8ea6a2+50,829d98+67,4e5c5a+82,0e0e0e+100;Grey+3D */
background: #d8e0de; /* Old browsers */
background: -moz-linear-gradient(top,  #d8e0de 0%, #aebfbc 22%, #99afab 33%, #8ea6a2 50%, #829d98 67%, #4e5c5a 82%, #0e0e0e 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #d8e0de 0%,#aebfbc 22%,#99afab 33%,#8ea6a2 50%,#829d98 67%,#4e5c5a 82%,#0e0e0e 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #d8e0de 0%,#aebfbc 22%,#99afab 33%,#8ea6a2 50%,#829d98 67%,#4e5c5a 82%,#0e0e0e 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d8e0de', endColorstr='#0e0e0e',GradientType=0 ); /* IE6-9 */

    color: lime
            }
            
    
</style>


<body background="fondo7.jpg" >
    
    <div id = "Principal" align="center">
        
<?php

    session_start();

    echo '<body style="background:url(fondo7.jpg);text-align: center;  background-repeat: no-repeat; background-size: 100% 115%;">';
    $numero1 = mt_rand(1,3);       
    $numero2 = mt_rand(1,3);
    $numero3 = mt_rand(1,3);
    
//    echo '<img src="imagenes/'.$numero1.'.jpg"/>';
//    echo '<img src="imagenes/'.$numero2.'.jpg"/>';
//    echo '<img src="imagenes/'.$numero3.'.jpg"/>';
    
    
        echo '<div  style="  margin-top:13% ">';
        echo '<img src="imagenes/'.$numero1.'.jpg" /HSPACE="10" width="10%" id="foto" align="left-center" width="130"> ';        
        echo '<img src="imagenes/'.$numero2.'.jpg" /HSPACE="10" width="10%" id="foto" align="left-center" width="130"> ';       
        echo '<img src="imagenes/'.$numero3.'.jpg" /HSPACE="10" width="10%" id="foto" align="left-center" width="130"> ';
        //echo '<img src="imagenes/'.$numero4.'.png" /HSPACE="10" width="10%"> ';
        echo'</div>';
    
        //$pagina1 = index.php;
        
                
        
    if(!isset($_SESSION['MONEDAS']) OR isset($_GET['reiniciar'])){
        
        $_SESSION['MONEDAS'] = 10000;
        
    }
    
    if( $_SESSION['MONEDAS'] == 10000){
        
    echo '<h3.5 style="color: lime; margin-top:1%;margin-bottom:1%"><center>TIENES '.$_SESSION['MONEDAS']. ' PUNTOS PARA EMPEZAR<br>';
    //echo'<h1 style="color:white; margin-top:1%;margin-bottom:1%"><center>TUS PUNTOS SON:'.$_SESSION['puntos'].'<center/><h1/>';
    //<input id="b1" type="button" onclick="index.php" />
    }
    
    
    if( $_SESSION['MONEDAS'] >= 1){
        if($numero1 == $numero2 && $numero1 == $numero3 ){
            
            
            $_SESSION['MONEDAS'] = $_SESSION['MONEDAS'] * 2;
            echo "<br>FELICITACIONES GANASTE!<br>";
            echo "<br>OBTUVISTE ".$_SESSION['MONEDAS']." PUNTOS";
            echo '<br><br><a href = "index.php"><br><img src="play.png" alt="" style="  margin-top:-3% ">';
            echo '<br><br><br><a href = "index.php?reiniciar=1"><br><img src="reset.png" alt="" style="  margin-top:-3% ">';

        }
        else{
            if($_SESSION['MONEDAS'] < 0){
                $_SESSION['MONEDAS'] = $_SESSION['MONEDAS'] - ($_SESSION['MONEDAS']/2);
                echo "<br>TIENES ".$_SESSION['MONEDAS']." PUNTOS";
                echo "<br>NO PUEDES SEGUIR JUGANDO, SE TE ACABARON LOS PUNTOS!<br>";
                echo "REINICIA Y SIGUE INTENTANDO<br>";
                echo '<br><br><br><a href = "index.php?reiniciar=1">Reiniciar<br><img src="reset.png" alt="" style="  margin-top:-3% ">';
            }else{
                $_SESSION['MONEDAS'] = $_SESSION['MONEDAS'] - ($_SESSION['MONEDAS']/2);
                echo "<br>SIGA INTENTANDO, CRACK<br>";
                echo "AUN TIENES ".$_SESSION['MONEDAS']." PUNTOS";
                echo '<br><br><a href = "index.php"><br><img src="play.png" alt="" style="  margin-top:-3% ">';
                echo '<br><br><br><a href = "index.php?reiniciar=1"><br><img src="reset.png" alt="" style="  margin-top:-3% ">';
            }
        }

    
    } else {
        $_SESSION['MONEDAS'] = $_SESSION['MONEDAS'] - ($_SESSION['MONEDAS']/2);
        echo "<br>TIENES ".$_SESSION['MONEDAS']." PUNTOS";
        echo "<br>NO PUEDES SEGUIR JUGANDO, SE TE ACABARON LOS PUNTOS!<br>";
        echo "REINICIA Y SIGUE INTENTANDO<br>";
        echo '<br><br><br><a href = "index.php?reiniciar=1">Reiniciar<br><img src="reset.png" alt="" style="  margin-top:-3% ">';
        
    }
    
    ?>
    </div>
</body>