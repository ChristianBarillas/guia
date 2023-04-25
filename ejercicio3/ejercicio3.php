<?php


class Transferencia{
 public function tipoPago($tipo, $cantidad){
if($tipo == "tarjetaCredito"){
return "Usted va pagar $$cantidad con tarjeta de credito";
}
if($tipo == "payPal"){
  return "Usted va pagar $$cantidad por medio de PayPal";
 }
 }
    }



?>
