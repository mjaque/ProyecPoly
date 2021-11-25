<?php
    $licitacion->$numero=$_POST['iLicitacion'];
    $licitacion->$empresa=$_POST['iEmpresa'];
    $licitacion->$importe=$_POST['iImporte'];
    $myJSON = json_encode($licitacion);
    echo $myJSON;
    $licitaciones = array(        
        1 => array(
            'codigo' => 'ABC123',
            'precio' => 5000,
            'hp' => 20,
            'adjudicatario' => 'Beberly Tronas',
            'oferta' => 1500
        ),
        2 => array(
            'codigo' => 'ABC124',
            'precio' => 6000,
            'hp' => 30,
            'adjudicatario' => 'Tyrall',
            'oferta' => 2500
        )
    );

?>