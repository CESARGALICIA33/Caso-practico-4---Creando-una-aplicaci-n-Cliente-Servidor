<?php

    $Id = $_GET['Id'];

    $cliente=new SoapClient(
        null,array(
            'location'=>'https://restaurantesws.000webhostapp.com/RestaurantesSW.php',
            'uri'=>'https://restaurantesws.000webhostapp.com/RestaurantesSW.php',
            'trace'=>1
        )

    );
 
        try{
           
        $respuesta=$cliente->__soapCall("EliminarRestaurante",[$Id]);
       if($respuesta==1){
        header('Location: index.php');
    }else{
        echo 'error no se elimino';
       }

         }catch(SoapFault $e){

         echo $e->getMessage();    
        }
   
?>
