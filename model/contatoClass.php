<?php 

/* Classe de Contato
 * Autor: Gabriel Robis Pereira
 * Data de criação: 2019-11-25
 * Data/Hora de Modificação:
 * Modificações realidadas:
*/
class Contato {

    private $codigo;
    private $nome;
    private $telefone;
    private $celular;
    private $email;

    public function __construct() {

    }

    //Get and Set Codigo
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    //Get and Set Nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    //Get and Set Telefone
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    //Get and Set Celular
    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }
    
    //Get and Set Email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
 
}


?>