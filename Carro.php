<?php


class Carro 
{
  
  public  $cor;
  private $potencia;
  private $capacidadeTanqueCombustivel;
  private $marca		='Fiat';
  private $modelo		='147';
  private $anoFabricacao	='1986';
  private $chassi;
  
  
  public function __construct($cor = "Branco")
  {
    $this->cor = $cor;
  }
  
  public function __toString()
  {
    return $this->marca." - ".$this->modelo." - ".$this->anoFabricacao;
  }
  
  public function __set($atributo,$valor)
  {
    $this->$atributo = $valor;
  }
  
  public function __get($atributo)
  {
    return $this->$atributo;
  }
  
  
  
  
  
  
  private function andar()
  {
    
  }
  
  public function acelerar()
  {
    
  }
  
  public function frear()
  {
  
  }
  
  public function ligar()
  {
  
  }

  public function desligar()
  {
    
  }

  public function abastercer()
  {
    
  }







}