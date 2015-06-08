<?php

namespace App\Controllers;

use SON\Controller\Action,
    SON\Di\Container;

class Index extends Action {
    public function index()
    {
        $this->render('Index');
    }

    public function empresa()
    {
        $empresa = Container::getClass("Empresa");
        $conteudos = $empresa->getRandom();

        $this->view->empresa = $conteudos;

        $this->render('empresa');
    }

    public function home()
    {
        $this->render('home');
    }

    public function servicos()
    {
        $servicos = Container::getClass("Servicos");
        $conteudos = $servicos->getRandom();

        $this->view->servicos = $conteudos;

        $this->render('nossotrabalho');
    }

    public function localizacao()
    {
        $locais = Container::getClass("Localizacao");
        $conteudos = $locais->getRandom();

        $this->view->localizacao = $conteudos;

        $this->render('localizacao');
    }

    public function faleconosco()
    {
        $this->render('faleconosco');
    }

}