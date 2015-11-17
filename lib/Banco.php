<?php
class Banco extends Crud
{
    private static $instancia;
    protected $conexao;
    

    private function __construct() {}
    

    public static function instanciar()
    {
        if(!self::$instancia) {
            self::$instancia = new Banco;
            self::$instancia->conectar();
        }
        return self::$instancia;
    }
    private function conectar()
    {
        global $config;
        
        $this->conexao = new PDO("{$config['driver']}:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['pass']);
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}