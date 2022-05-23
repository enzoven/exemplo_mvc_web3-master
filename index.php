<?php

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/ProdutoCategoriaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/pessoa':

        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    case '/produto':
        
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/form/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    case '/produtocategoria':
        
        ProdutoCategoriaController::index();
    break;

    case '/produtocategoria/form':
        ProdutoCategoriaController::form();
    break;

    case '/produtocategoria/form/save':
        ProdutoCategoriaController::save();
    break;

    case '/produtocategoria/delete':
        ProdutoCategoriaController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}