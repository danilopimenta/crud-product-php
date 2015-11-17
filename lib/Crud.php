<?php
abstract class Crud
{
    final public function listar($tabela, $campos, $condicao=null) 
    {
    	$query = "SELECT $campos FROM $tabela";
    	if($condicao) $query.= " WHERE $condicao";
    	
        $rs = $this->conexao->query($query);
        
        return $rs->fetchAll(PDO::FETCH_ASSOC); 
    } 
    
    final public function ver($tabela, $campos, $condicao)
    {
    	$rs = $this->conexao->query("SELECT $campos FROM $tabela WHERE $condicao");
    	
    	return $rs->fetch(PDO::FETCH_ASSOC);
    }
    
    final public function inserir($tabela, $dados)
    {
    	foreach($dados as $campo => $valor) {
    		$colunas[] = $campo;
    		$valores[] = $valor;
    		$holders[] = "?";
    	}
    	$colunas = implode(', ', $colunas);
    	$holders = implode(', ', $holders);
		
    	$st = $this->conexao->prepare("INSERT INTO $tabela($colunas) VALUES ($holders)");
    	return $st->execute($valores);
    } 
    
    final public function editar($tabela, $dados, $condicao)
    {
    	foreach($dados as $campo => $valor) {
    		$sets[]     = "$campo = ?";
    		$valores[] = $valor;
    	}
    	$sets = implode(', ', $sets);
    	
    	$st = $this->conexao->prepare("UPDATE $tabela SET $sets WHERE $condicao");
    	$st->execute($valores);
    }
    
    final public function excluir($tabela, $condicao)
    {
    	$this->conexao->exec("DELETE FROM $tabela WHERE $condicao");
    }
}