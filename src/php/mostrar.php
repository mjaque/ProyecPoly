<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="rtorresgutierrez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="jcarrascorodriguez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="amfernandezbanos.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="pceballosbenitez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/mostrar.css" />
        <title>Mostrar Licitaciones</title>
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
            <h1>LISTADO LICITACIONES</h1>
            <table>
                <tr>
                    <th>Código</th>
                    <!--<th>Precio</th>-->
                    <!--<th>HappyPoints</th>-->
                    <th>Adjudicatario</th>
                    <th>Oferta</th>
                </tr>
                <?php
                    //extrae el contenido del fichero JSON
                    $contenido=file_get_contents('../js/results.json');
                    $datos=json_decode($contenido, true);
                    //muestra el contenido del fichero fila a fila
                    foreach($datos as $indice){
                        echo '<tr>';
                        foreach($indice as $dato){
                            echo '<td>' . $dato . '</td>';
                        }
                        echo '</tr>';
                    }
                    /*echo '<tr>'.
                            '<td>' . $dato['Numero'] . '</td>'.
                            '<td>' . $dato['Importe'] . '</td>'.
                            '<td>' . $licitacion['hp'] . '</td>'.
                            '<td>' . $dato['Empresa'] . '</td>'.
                            '<td>' . $licitacion['oferta'] . '</td>'.
                        '</tr>';*/
                    
                   
                ?>
            </table>
            <a href="ganador.php"><button class="button-9" role="button">Comprobar Ganador</button></a>
        </div>
    </body>
</html>