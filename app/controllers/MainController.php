<?php

namespace app\controllers;

use RedBeanPHP\R;
use wfm\Controller;

/** @property Main $model */

class MainController extends AppController
{

    public function indexAction()
    {
        // $this->setMeta('Главная страница', 'Description...', 'keywords...');

        $slides = R::findAll('slider');

        $products = $this->model->get_hits(1, 6);

        $this->set(compact('slides', 'products'));

    }
}