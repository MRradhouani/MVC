<?php
class App {
    protected $controller='home';
    protected $method ='index';
    protected $params =[];
public function __construct()
{
    echo'ok!';
    if (file_exists($this->controller.$this->controller. '.php'))
    {
    $this->controller= new $this->controller;
    $this->controller->index();
    }
}
public function parserURL()
{
    }

}