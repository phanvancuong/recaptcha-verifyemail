<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Response;
class macrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('cuong',function($str){
            return Response::make(strtoupper($str));
        });
        Response::macro('contract',function($action){ 
            $contract ='
            <form action="'.$action.'" method="POST" accept-charset="utf-8">
              ho ten :<input type="text"/><br/>
              so dien thoai :<input type="text"/>
            </form>';
            return $contract;
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
