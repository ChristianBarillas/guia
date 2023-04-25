<?php

// se estaba violando el principio open-closed 


interface TipoPago {

public function tranferencia ($cantidad);

}





class Paypal implements TipoPago{


public function tranferencia ($cantidad){
    
    return "Usted va pagar $ $cantidad  por medio de PayPal";

}
 
    }



    class TargetaCredito implements TipoPago{

        public function tranferencia($cantidad)
        {
            return "Usted va pagar $ $cantidad  por medio de una targeta de credito";
        }
    }


?>
