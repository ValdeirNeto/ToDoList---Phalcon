<?php

use Phalcon\Mvc\Model;

class Listas extends Model
{
    public $id;
    public $nome;
    public $descricao;
    public $realizado;

    public function getLista(){

        $this->setSource("listas");
        
      }
}