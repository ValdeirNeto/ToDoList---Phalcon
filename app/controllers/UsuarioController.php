<?php

use Phalcon\Mvc\Controller;

class UsuarioController extends Controller
{
    public function indexAction()
    {

      
    }

    public function listAction()
    {
      $this->view->pick("usuarios/list");
    }
}