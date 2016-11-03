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

//        dd("Heeeeeeeeeeeeeeeeeeeeeyyyyyyyyyyyy");
        $this->loadMigrations();
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->publishFactories();

    }

    private function loadMigrations()
    {
    }

    private function publishFactories()
    {
        $this->publishes(
            [
                __DIR__.'/../../database/factories/StudyFactory.php' =>
                database_path().'/factories/StudyFactory.php'
            ],"scool_curriculum"
        );
    }
}