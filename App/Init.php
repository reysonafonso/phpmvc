<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{

    protected function initRoutes()
    {
        $ar['index'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];
        $ar['empresa'] = ['route' => '/empresa', 'controller' => 'index', 'action' => 'empresa'];
        $ar['home'] = ['route' => '/home', 'controller' => 'index', 'action' => 'home'];
        $ar['nossotrabalho'] = ['route' => '/nossotrabalho', 'controller' => 'index', 'action' => 'servicos'];
        $ar['localizacao'] = ['route' => '/localizacao', 'controller' => 'index', 'action' => 'localizacao'];
        $ar['faleconosco'] = ['route' => '/faleconosco', 'controller' => 'index', 'action' => 'faleconosco'];
        $this->setRoutes($ar);
    }

    public static function getDb()
    {
        $db = new \PDO("mysql:host=localhost;dbname=empresa", "root", "root");
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}
