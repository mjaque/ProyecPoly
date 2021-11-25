<?php
    //recibe los valores del cuestionario
    $numero=$_POST['iLicitacion'];
    $empresa=$_POST['iEmpresa'];
    $importe=$_POST['iImporte'];
    $arrayIntro = array
    (
        'Numero'=> $numero,
        'Empresa'=> $empresa,
        'importe'=> $importe
    );
    //extrae el contenido del fichero JSON
    $contenido=file_get_contents('../js/results.json');
    $datos=json_decode($contenido, true);
    
    //añade los valores del formulario al fichero JSON 
    $datos[]=$arrayIntro;
    $final= json_encode($datos);
    if(file_put_contents('../js/results.json', $final)){
        header("Location: mostrar.php");
    }else{
        echo 'error';
    }
   




?>