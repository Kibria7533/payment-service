<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () {
    return 'Hello World from payment service';
});

$router->get('/payments', ["as" => "payments", "uses" => "PaymentController@getPayments"]);
$router->delete('/delete/{id}', ["as" => "payments.delete", "uses" => "PaymentController@delete"]);
