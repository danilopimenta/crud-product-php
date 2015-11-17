<?php
	class Controller{
		private $classe;
		private $view;
		private $dados;
		private $model;
		public function __construct( $tipo ){
			try{
				
				//index.php?module=produto&action=cadastrar
				$this->view = new View();
				$action = 'index';
				
				if( isset( $_GET['modulo'] ) ){
					$this->model = ucfirst( $_GET['modulo'] );
					$this->classe = new $this->model();
				}
			
				if( isset( $_GET['action'] ) ){
					$action = $_GET['action'];
					if( isset( $_GET['id'] ) ){
						$this->dados = $this->classe->$action( $_GET['id'] );
					}else{
						$this->dados = $this->classe->$action();
					}
				}				
				
			
				$this->dados = $this->classe->$action();
				$this->view->$tipo( "{$this->model}/$action", $this->dados );
				
			}catch( EXCEPTION $erro ){
				echo "<h1> Um erro muito sério ocorreu {$erro->getMessage()} ";
			}
		}
	}