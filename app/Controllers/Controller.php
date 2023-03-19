<?php

namespace App\Controllers;

use App\Views\View;

class Controller {

    private $view;

    public function __construct()
    {
        // create a new View object and pass the path to the templates
        $this->view = new View(__DIR__ . '/../../templates');
    }

    /**
     * @throws \Exception
     */
    public function home(): void
    {
        // render the view and output the result
        $this->view->render('home');
    }

    public function greeting(string $name): void
    {
        // set the value of $name in the view, render the view and output the result
        $this->view->render('greeting', ['name' => $name]);
    }

    public function error(string $request): void
    {
        $this->view->render('error', ['request' => $request]);
    }
}
