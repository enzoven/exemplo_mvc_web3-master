<?php

spl_autoload_register(function ($classe_chamada) 
{

    $classe_controller = 'Controller/' . $classe_chamada . '.php';
    $classe_model = 'Model/' . $classe_chamada . '.php';
    $classe_dao = 'Dao/' . $classe_chamada . '.php';

    if(file_exists($classe_controller))
    {

        include $classe_controller;

    } else
        exit('Arquivo não encontrado. Arquivo: ' . $classe_controller . "<br />");
});