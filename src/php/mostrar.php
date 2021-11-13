<?php

    require_once 'fichero.php';

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
                    <a href="index.html">SOLICITAR</a>
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
                    <th>Precio</th>
                    <th>HappyPoints</th>
                    <th>Adjudicatario</th>
                    <th>Oferta</th>
                </tr>
                <?php

                    foreach($licitaciones as $licitacion){
                        echo '<tr>'.
                            '<td>' . $licitacion['codigo'] . '</td>'.
                            '<td>' . $licitacion['precio'] . '</td>'.
                            '<td>' . $licitacion['hp'] . '</td>'.
                            '<td>' . $licitacion['adjudicatario'] . '</td>'.
                            '<td>' . $licitacion['oferta'] . '</td>'.
                        '</tr>';
                    }
                ?>
            </table>
        </div>
    </body>
</html>