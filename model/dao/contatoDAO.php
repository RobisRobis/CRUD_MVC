<?php 

/* Classe de ContatoDAO
 * Autor: Gabriel Robis Pereira
 * Data de criação: 2019-11-25
 * Data/Hora de Modificação:
 * Modificações realidadas:
*/
class ContatoDAO {

    private $conexaoMysql;
    private $conexao;

    public function __construct() {

        require_once('conexaoMysql.php');

        //Instancia Objeto de conexao com o Mysql
        $this->conexaoMysql = new conexaoMysql();
        
        //Atribui metódo de conexão do Objeto conexaoMysql a uma variavel
        $this->conexao = $this->conexaoMysql->connectDatabase();
    }

    //Insere um novo contato
    public function insertContato(Contato $contato) {  
        $sql = "INSERT INTO contatos (nome, telefone, celular, email) VALUES (?,?,?,?) ";

        $statement = $this->conexao->prepare($sql);
        $statement_dados = array(
            $contato->getNome(),
            $contato->getTelefone(),
            $contato->getCelular(),
            $contato->getEmail()
        );

        if($statement->execute($statement_dados))
            echo("Inserido com Sucesso");
        else
            echo("Erro ao inserir no BD");

    }

    //Atualiza um contato
    public function updateContato() {
        
    }

    //Deleta um contato
    public function deleteContato() {
        
    }

    //Seleciona todos os contatos
    public function selectAllContato() {
        
    }

    //Seleciona contato por Id
    public function selectById() {

    }


}

?>