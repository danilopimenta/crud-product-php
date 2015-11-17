<?php
class Produto {
    private $banco;
    const TABELA = 'produto';
    public function __construct() 
    {
        $this->banco = Banco::instanciar();
    }
    public function index()
    {
        return $this->banco->listar(self::TABELA, '*');
    }
    public function editar() 
    {
       
        if ($_POST) {
            $this->banco->editar(self::TABELA, $_POST,'id = '.$_GET['id']);

            header("Location: index.php?modulo=produto");
        }else{
            return $this->banco->ver(self::TABELA,'*','id=' . $_GET['id']);
        }

    }
    
    public function adicionar() 
    {   
        if ($_POST) {
            $this->banco->inserir(self::TABELA, $_POST);

            header("Location: index.php?modulo=produto");

            exit();
        }else{
            return true;
        }

        
    }

    public function deletar() 
    {
        $this->banco->excluir(self::TABELA, 'id=' . $_GET['id']);

        header("Location: index.php?modulo=produto");
    }

   
}