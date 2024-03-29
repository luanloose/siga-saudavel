<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'usuarios'], function() use($router){

    $router->get('/', 'UserController@index');
    $router->post('/','UserController@store');
    $router->get('/{user}', 'UserController@show');
    $router->put('/{user}', 'UserController@update');
    $router->delete('/{user}', 'UserController@destroy');

});

$router->group(['prefix' => 'points'], function() use($router){

    $router->post('/deposit/{user}', 'UserController@deposit');
    $router->post('/withdraw/{user}', 'UserController@withdraw');

});


$router->group(['prefix' => 'health'], function() use($router){

    $router->post('/','HealthController@store');
    $router->put('/{user}', 'HealthController@update');
    $router->delete('/{user}', 'HealthController@destroy');

});

$router->group(['prefix' => 'games'], function() use($router){

    $router->post('/','GamesController@store');
    $router->put('/{user}', 'GamesController@update');
    $router->delete('/{user}', 'GamesController@destroy');
    $router->get('/', 'UserController@show');


});

$router->group(['prefix' => 'challenges'], function() use($router){

    $router->post('/','ChallengesController@store');
    $router->put('/', 'ChallengesController@fisish');
});