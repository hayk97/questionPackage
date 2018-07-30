<?php


namespace Aist\Question\Providers;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{

    public function boot() {

        $this->loadRoutesFrom(__DIR__ . './../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . './../migrations');
        $this->loadViewsFrom(__DIR__ . './../views', 'question');
    }

    public function register() {
        $this->app->make('aist\survey\QuestionsController');
    }
}