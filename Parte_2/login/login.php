<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 14/07/16
 * Time: 13:56
 */

    $login = $_GET["login"];
    $senha = $_GET["senha"];

    if($senha != "admin123" || $login != "admin"){
        echo "Login ou senha incorretos";
    }