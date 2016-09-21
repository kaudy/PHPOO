<?php


abstract class MotorBase
{
  const   POTENCIA 	= 1.0;
  private $aceleracao 	= 0;
  private $ligado 	= false;
  
//***********************************************************************************************
  public function acelerar($valor)
  {
    $this->aceleracao = $valor;
    return $this->aceleracao * self::POTENCIA;
  }
  
//***********************************************************************************************  
  /**
  *  @param boolean $simounao
  */
  public function ligar($simounao)
  {
    $this->ligado = $simounao;
  }
//***********************************************************************************************














}