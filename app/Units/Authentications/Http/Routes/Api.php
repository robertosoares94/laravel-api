<?php
namespace App\Units\Authentications\Http\Routes;
use App\Support\Routing\RouteFile;
use Illuminate\Http\Request;

class Api extends RouteFile
{
    protected function routes()
    {
        $this->registerDefaultRoutes();
    }
    protected function registerDefaultRoutes()
    {
        $this->registerV1Routes();
    }
    protected function registerV1Routes()
    {
        $this->router->group(['prefix'=>'v1'],function (){
            $this->userRoutes();
        });
    }
    protected function registerV2Routes()
    {
        $this->router->group(['prefix'=>'v2'],function (){
            $this->userRoutes();
        });
    }
    protected function userRoutes()
    {
        $this->router->get('user', function (Request $request) {
            return 'teste';
            //return $request->user();
        });
    }
}