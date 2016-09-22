<?php

namespace PHPOO;

use Ford\Motor\MotorBase as MotorFord;
use Bosh\Motor\MotorBase as MotorBosh;

class Carro
{

    //Atributos
    public $cor;
    private $quantCombustivel;
    private static $chassi = 'XYZ';

    //Constantes
    const MARCA = 'Fiat';
    const MODELO = '147';
    const ANO = '1986';

    //Obj MotorBase
    private $motor;

    //**************************************************************************

    public function __construct($cor = "Branco", MotorFord $motor)
    {
        $this->cor = $cor;
        $this->motor = $motor;
    }

    //**************************************************************************

    public function __toString()
    {
        return self::MARCA . " - " . self::MODELO . " - " . self::ANO;
    }

    //**************************************************************************
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    //**************************************************************************
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    //************************************************************************** 

    public function ligar()
    {
        try
        {
            $quant = $this->marcadorCombustivel();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }

        if ($quant > 0)
        {
            $this->motor->ligar(true);
        }
    }

    //**************************************************************************
    /**
     *   Abastece o carro
     *   @param float $litros
     *   @return float
     */
    public function abastecer($litros)
    {
        $this->quantCombustivel+= $litros;
        return $this->quantCombustivel;
    }

//******************************************************************************
    public function desligar()
    {
        $this->motor->ligar(false);
    }

//******************************************************************************
    public function marcadorCombustivel()
    {
        if ($this->quantCombustivel < 5)
        {
            throw new Exception('Combustivel esta acabando!<br>');
        }
        return $this->quantCombustivel;
    }

//****************************************************************************** 
    static public function radio()
    {
        echo "<br>Radio ligado!<br>";
        echo $this->quantCombustivel;
    }

//******************************************************************************
    public function acelerar($potencia)
    {
        $torque = $this->motor->acelerar($potencia);
        $this->andar($torque);
    }

//******************************************************************************

    /**
     *   @param float $torque
     *   
     */
    private function andar($torque)
    {
        $combustivelGasto = $torque / 100;
        $this->quantCombustivel-=$combustivelGasto;
    }

//******************************************************************************
    public function frear()
    {
        
    }

//******************************************************************************
    public function getPotencia()
    {
        return $this->motor->getPotencia();
    }

}
