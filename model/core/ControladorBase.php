<?php

  class ControladorBase{
    public function __construct(){
      require_once 'entidadBase.php';
      require_once 'ModeloBase.php';

      foreach(glob("model/*.php")as $file){
        require_once $file;
      }
    }
    
  }