<?php

// se viola el principio de segregacion de interfaces



    interface exportarPDF{
        public function PDF();
    
    }
    interface exportarJSON{
        public function JSON();
    
    }
    interface exportarText{
        public function Text();
    
    }
    
    class BoletaPago implements exportarPDF{
        public function PDF(){
            return " Boleta de pago en formato PDF";
        }
    
    }
    
    class Mensaje implements exportarText{
        public function Text(){
            return "Mostrar mensaje tipo text";
        }
    }
    
    








?>