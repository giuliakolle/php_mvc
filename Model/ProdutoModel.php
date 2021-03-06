<?php

    class ProdutoModel
{
   
    public $id, $codigo, $produto, $descricao;
    public $data;
    public $valor;


    
    public function save()
   
{
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        if($this->id == null) 
        {
         
            $dao->insert($this);
        } else {

}
                
}

    public function getAllRows(){

        include "DAO/ProdutoDAO.php";

        $dao = new ProdutoDAO();
        $this->rows = $dao->getAllRows();
}

    public function getById(int $id)
    
{
        include 'DAO/ProdutoDAO.php'; 

        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new PessoaModel(); 
}

    public function delete(int $id)
    
{
        include 'DAO/ProdutoDAO.php'; 

        $dao = new ProdutoDAO();
        $dao->delete($id);
    }
}