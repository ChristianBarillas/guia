<?php

interface exportDocument{
 public function exportarPDF();
 public function exportarJSON();
 public function exportarText();
    }
    
    class BoletaPago implements exportDocument{
 public function exportarPDF()
 {
 return "Su boleta de pago esta en PDF";
 }
    
public function exportarJSON()
   {
 throw new Exception("no se puede exportar en JSON");
 }
    
 public function exportarText()
 {
   throw new Exception("no se puede exportar en texto");
}
    }












?>