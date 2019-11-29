<?php 


/* Classe de conexão com o banco de dados MySql
 * Autor: Gabriel Robis Pereira
 * Data de criação: 2019-11-25
 * Data/Hora de Modificação:
 * Modificações realidadas:
*/
class ConexaoMysql {
    private $server;
    private $user;
    private $password;
    private $database;

    public function __construct(){
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "bcd127";
        $this->database = "db_contatos_2019a";
    }

    public function connectDatabase(){
        
        /*
            PDO é um dos métodos PHP de conexão com Banco de Dados
            sendo necessário 3 parâmetros
                1° Qual banco será usado, host/ip, dbname
                2° Usuário
                3° Senha
        */

        try{
            $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->database, $this->user, $this->password);

            return $conexao;
        }catch (PDOException $Erro) {
            echo("Erro de conexão com o Banco de Dados. <br>
                Linha do erro: ".$Erro->getLine()."
                Mensagem de Erro: ".$Erro->getMessage()."
            ");
        }
        

    }
}





?>