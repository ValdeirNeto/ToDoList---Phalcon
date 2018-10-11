<?php

use Phalcon\Mvc\Controller;

class ListaController extends Controller
{
    public function indexAction()
    {
        
    }

    public function listaAction(){
        $lista = new Listas();
        $lista->getLista();

        $this->view->lista;
        // $this->view->lista = Listas::find("realizado = 0");

    }
    public function cadastroAction()
    {
        $lista = new Listas();
        $dados = $this->request->getPost();

        $lista->nome = $dados['nome'];
        $lista->descricao = $dados['descricao'];
        $lista->realizado = false;

        $success = $lista->save();


        if ($success) {
            echo "Tarefa Cadastrada";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $lista->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

    }
}