<?php


$namespace = 'Aist\\Question\\Controllers';

//Route::group([
//    'namespace' => $namespace,
//], function () {
//    Route::get('/', function () {
//        return ['Hello', 'this is audit route'];
//    });
//
//    Route::get('test', 'aist\question\QuestionsController@index');
//
//});
Route::resource('/question', "$namespace\\QuestionsController");