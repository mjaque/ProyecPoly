<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="rtorresgutierrez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="jcarrascorodriguez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="amfernandezbanos.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="author" content="pceballosbenitez.guadalupe@alumnado.fundacionloyola.net" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/index.css" />
        <title>Solicitar Licitación</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="#">SOLICITAR</a>
                </li>
                <li>
                    <a href="mostrar.php">MOSTRAR</a>
                </li>
            </ul>
        </nav>
        <form action="fichero.php" method="post">
            <h1>Solicitar Licitación</h1>
            <!--LICITACIÓN-->
            <div class="row">
                <div class="col-25">
                    <label for="iLicitacion">Licitación</label>
                </div>
                <div class="col-75">
                    <input type="text" id="iLicitacion" name="iLicitacion" placeholder="Licitación" />
                </div>
            </div>
            <!--EMPRESA-->
            <div class="row">
                <div class="col-25">
                    <label for="iEmpresa">Empresa</label>
                </div>
                <div class="col-75">
                    <input type="text" id="iEmpresa" name="iEmpresa" placeholder="Empresa" />
                </div>
            </div>
            <!--IMPORTE-->
            <div class="row">
                <div class="col-25">
                    <label for="iImporte">Importe</label>
                </div>
                <div class="col-75">
                    <input type="number" id="iImporte" name="iImporte" min="500" placeholder="Importe" />
                </div>
            </div>
            <!-- SUBMIT -->
            <div class="row">
              <input type="submit" value="Submit" name="volver">
            </div>
        </form>
    </body>
</html>