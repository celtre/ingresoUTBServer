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

$app->get('/', function () use ($app) {
    return "Servidor de la Universidad tecnologica de Bolivar para ingresoUTB";
});
$app->group(['prefix' => 'ingresoUTB','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('registro','registrosController@index');

    $app->get('registro/{id}','registrosController@getRegistro');

    $app->post('registro','registrosController@createRegistro');

    $app->put('registro/{id}','registrosController@updateRegistro');

    $app->delete('registro/{id}','registrosController@deleteRegistro');
});
