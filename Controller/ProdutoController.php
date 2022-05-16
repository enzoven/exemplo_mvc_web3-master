<?php

class ProdutoController 
{
    public static function index()
    {
        
        include 'Model/ProdutoModel.php'; 
        
        $model = new ProdutoModel(); 
        $model->getAllRows();
        include 'View/modules/Produto/ListaProdutos.php'; 
    }

    public static function form()
    {
        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 
            

        include 'View/modules/Produto/FormProduto.php'; 
    }

    public static function save()
   
    {
       include 'Model/ProdutoModel.php'; 

       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->cpf = $_POST['marca'];
       $model->data_nascimento = $_POST['valor'];

       $model->save(); 

       header("Location: /produto"); 
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /produto"); 
    }
}