<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="jcarreterogranado.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="dcarrionrodriguez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="kbenaventeortega.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="lmarzaldelaconcepcion.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/mostrar.css" />
        <title>Ganador Licitaciones</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="index.php">SOLICITAR</a>
                </li>
                <li>
                    <a href="#">MOSTRAR</a>
                </li>
            </ul>
        </nav>
        <div>
            <h1>GANADOR LICITACIONES</h1>
            <table>
                <tr>
                    <th>Adjudicatario</th>
                    <th>Oferta</th>
                </tr>
                
                <?php
                 //comprueba todos los participantes de la licitacion y muestra el ganador o ganadores en caso de empate      
                $contenido=file_get_contents('../js/results.json');
                $datos=json_decode($contenido, true);
                $contador=0;
                $min=1000000000000000000000;
                $sw=0;
                $empresaMin=null;
                foreach($datos as $indice){
                    $contador++;
                    if($indice['importe']<$min){
                        $min= $indice['importe'];
                        $empresaMin=$indice['Empresa'];
                        $sw=0;
                    }else if($indice['importe']==$min){
                        $empresaMin=array([$empresaMin,$indice['Empresa']]);
                        $sw=1;
                    }
                }
                
                if($sw==1){
                    foreach($empresaMin as $empresaGanadora){
                        foreach($empresaGanadora as $resul){
                            echo '<tr>';
                            echo '<td>' . $resul . '</td>';
                            echo '<td>' . $min . '</td>';
                            echo '</tr>';
                        }
                        
                    }
                }else{
                    echo '<tr>';
                    echo '<td>' . $empresaMin . '</td>';
                    echo '<td>' . $min . '</td>';
                    echo '</tr>';
                }
  
                ?>
            </table>

        </div>
    </body>
</html>