<?php
namespace App\Support\Routing;

abstract class RouteFile
{

    protected $options;

    protected $router;

    public function __construct($options = [])
    {
        $this->options = $options;
        $this->router = app('router');
    }
    public function register()
    {
        $this->router->group($this->options,function (){
            $this->routes();
        });
    }

    /**
     * @return mixed
     */
    abstract protected function routes();
}