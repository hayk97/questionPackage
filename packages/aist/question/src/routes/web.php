<?php


$namespace = 'Survey\Http\Controllers';

Route::group([
    'namespace' => $namespace,
], function () {
    Route::get('/', function () {
        return ['Hello', 'this is audit route'];
    });

    Route::get('test', 'aist\question\controllers\QuestionsController@index');

});
