<?php 

/* Classe de Controller Contato
 * Autor: Gabriel Robis Pereira
 * Data de criação: 2019-11-25
*/
class ContatoController {

    //Construtor
    public function __construct() {
        require_once('model/contatoClass.php');
        require_once('model/dao/contatoDAO.php');
    }

    //Metodo para adicionar um novo contato
    public function novoContato() {
        
        //Instancia o objeto Contato
        $contato = new Contato();

        //Seta os atributos da classe com os dados recebidos do POST do Form
        $contato->setNome($_POST['txtNome']);
        $contato->setTelefone($_POST['txtTelefone']);
        $contato->setCelular($_POST['txtCelular']);
        $contato->setEmail($_POST['txtEmail']);

        //Instancia o objeto ContatoDAO
        $contatoDAO = new ContatoDAO();

        $contatoDAO->insertContato($contato);

    }



}


?>
