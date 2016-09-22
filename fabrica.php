<pre>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once('Carro.php');
    require_once('Motor/MotorBase.php');
    require_once('Motor/Motor16.php');
    require_once('Motor/Motor20.php');
    require_once('Motor/Motor20Turbo.php');
    require_once('./Rodas/RodaAco.php');
    require_once('./Acessorios/MotorBase.php');
    
    require_once ('./vendor/autoload.php');

    $motorAgua = new Bosh\Motor\MotorBase();
    
    $motor20 = new Ford\Motor\Motor20();
    $motor16 = new Ford\Motor\Motor16();
    $motor20Turbo = new Ford\Motor\Motor20Turbo();

    $roda = new RodaAco();

    $carro = new PHPOO\Carro('Prata', $motor20Turbo);

//----------------------------------------------------
    $carro->abastecer(10);
    $carro->ligar();
    $carro->acelerar(1);

    echo 'Pontecia do carro= ' . $carro->getPotencia() . '<br>';

    print_r($carro);
    print_r($roda);    
    
    
    print_r(json_encode($roda->jsonSerialize()));

    