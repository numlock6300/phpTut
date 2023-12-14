<?php

namespace app\controllers;

use RedBeanPHP\R;
use wfm\Controller;

/** @property Main $model */

class MainController extends Controller
{

    public function indexAction()
    {
        $names = $this->model->get_names();
        $one_name = R::getRow('SELECT * FROM name WHERE id = 2');
        // debug($names);
        $this->setMeta('Главная страница', 'Description...', 'keywords...');
        $this->set(compact('names'));
    }
}