<?php

class Adulto {
public function pago(){
 echo "Es mayor de edad puede pagar";
}
    }
    
    class Niño extends Adulto{
public function pago()
 {
throw new Exception("el niño no puede pagar, porque es menor de edad");
}
    }


?>