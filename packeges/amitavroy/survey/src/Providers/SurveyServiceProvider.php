<?php


namespace Amitavroy\Survey\Providers;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
//    protected $defer = true;

    public function boot() {

        $this->loadRoutesFrom(__DIR__ . './../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . './../');
    }

    public function register() {

    }
}