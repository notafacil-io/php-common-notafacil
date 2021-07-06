<?php

include_once(__DIR__.'/../vendor/autoload.php');

use NotaFacil\Client\ClientNotaFacil;
use NotaFacil\Client\Exceptions\NotaFacilException;


try {
    $credentials = [
        'login'      => 'NOME_USUARIO',
        'password'   => 'SENHA_USUARIO',
        'secret_key' => 'SECRET_KEY_SOFTHOUSE'
    ];
    $clientNotaFacil =(new ClientNotaFacil())->attempt($credentials);
    $auth = $clientNotaFacil->responseAuth();
    
    dump($auth);

} catch (NotaFacilException $th) {
    dump($th->getMessage());
}