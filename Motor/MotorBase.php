<?php

namespace Ford\Motor;

abstract class MotorBase
{

    const POTENCIA = 1.0;

    protected $aceleracao = 0;
    private $ligado = false;
    private $potencia = 1.0;

//******************************************************************************
    public function acelerar($valor)
    {
        $this->aceleracao = $valor;
        return $this->aceleracao * self::POTENCIA;
    }

//****************************************************************************** 
    /**
     *  @param boolean $simounao
     */
    public function ligar($simounao)
    {
        $this->ligado = $simounao;
    }

//******************************************************************************
    public function getPotencia()
    {
        return $this->potencia;
    }

    abstract public function refrigerar();
}
