<?php
namespace App\Core;

class Router {
    public function __construct()
    {
        $this->controllerName = (isset($_GET["t"]) ? $_GET["t"] : 'site') . 'Controller';
        $this->methodName = 'action' . (isset($_GET["a"]) ? $_GET["a"] : 'home');
        // $view = 'siteView';
    }

    public function run()
    {
        $className = "App\\Controller\\{$this->controllerName}";
        if (class_exists($className)) {
            $MVC = new $className();
                if (method_exists($MVC, $this->actionName)) {
                    $MVC->{$this->actionName}();
                } else {
                    echo "нет такого метода: $this->methodName";
                    // (new ErrorController())->notFoundAction($this->actionName);
                }
            } else {
                echo "нет такого класса: $this->controllerName";
                // (new ErrorController())->notFoundController($this->controllerName);
            }
    }

}
