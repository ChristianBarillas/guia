<?php

//se estaba violando el principio de liskov substitution

interface Pagar {
    public function pagos ();
    
}

class Adulto implements Pagar {
public function pagos(){
 echo "Es mayor de edad puede pagar";
}
    }



    
    class Niño implements Pagar{
        public function pagos()
        {
            echo "no tienes la suficiente edad";
        }

    }


?>