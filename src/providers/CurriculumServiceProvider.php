<?php

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;

class CurriculumServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
        //Inicialitzant el paquet cada cop que es carrega una pàgina

        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }
}