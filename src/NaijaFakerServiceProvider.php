<?php
namespace OctaconDeveloper\LaravelNaijaFaker;

use Illuminate\Support\ServiceProvider;
use OctaconDeveloper\LaravelNaijaFaker\Creator;

class NaijaFakerServiceProvider extends ServiceProvider
{
     public function boot()
     {

     }

     public function register()
     {
        $this->app->singleton(Creator::class, function($app){
            return new Creator();
        });
     }

}
