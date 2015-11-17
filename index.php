<?php
  include('config.php');

  //carregarModels
  function carregarModel( $classe ){
    if( file_exists( "app/model/$classe.php" ) ){
      require_once( "app/model/$classe.php" );
    }
  }
  
  //carregarApp 
  function carregarApp( $classe ){
    if( file_exists( "app/$classe.php" ) ){
      require_once( "app/$classe.php" );
    }
  }
  //CarregarLib
  function carregarLib( $classe ){
    if( file_exists( "lib/$classe.php" ) ){
      require_once( "lib/$classe.php" );
    }
  }
  spl_autoload_register('carregarModel');
  spl_autoload_register('carregarApp');
  spl_autoload_register('carregarLib');

  new Controller( 'produto' );