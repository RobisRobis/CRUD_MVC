<?php 


$controller = (string) null;
$modo = (string) null;

if(isset($_GET['controller']) && isset($_GET['modo'])){
    $controller = $_GET['controller'];
    $modo = $_GET['modo'];

    //Estrutura para manipular cada Controller do Projeto, sendo 
    switch (strtoupper($controller)){
        
        case 'CONTATOS':
            require_once('controller/contatoController.php');

            switch(strtoupper($modo)){
                case 'ADICIONAR':
                    
                    //Instância controller de Contato
                    $controllerContato = new ContatoController();
                    
                    //Metodo de inserir um novo Contato
                    $controllerContato->novoContato();

                    break;
                case 'EDITAR':

                    break;
                case 'EXCLUIR':

                    break;
            }
            break;
            
    }
}



















?>