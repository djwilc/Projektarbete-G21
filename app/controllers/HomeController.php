<?php namespace G21\App\Controllers;

use G21\Libraries\Controller;

class HomeController extends Controller {

    public function index()
    {
        return $this->view->render('layout.home');
    }

}