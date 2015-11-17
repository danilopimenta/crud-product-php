<?php
	class View{
		
		public function produto( $classe, $dados = null ){
			
			$classe = lcfirst( $classe );
			

	        
	        include("view/$classe.php");
			
		}
	}