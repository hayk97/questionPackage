<?php


namespace  Aist\Question\Providers;

use Illuminate\Support\ServiceProvider;

class QuestionServiceProvider extends ServiceProvider
{

    public function boot() {

        $this->loadRoutesFrom(__DIR__ . './../routes/web.php');
//        $this->loadMigrationsFrom(__DIR__ . './../migrations');
        $this->loadViewsFrom(__DIR__ . './../views', 'question');
    }

    public function register() {
    }
}