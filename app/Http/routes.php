<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('users', 'TestController@index');
Route::get('users/pagina', 'TestController@index');

Route::post('test/{id}', 'TestController@editar');

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact_send', 'uses' => 'ContactController@send']);

Route::any('hash/{password}', function($password){
    $hash_condificado = Hash::make($password);
    echo trans('miidioma.clave', ['clave' => $password, 'hash' => $hash_condificado]);

    echo '<hr />';
    if (Hash::check($password, $hash_condificado)) {

        if (Hash::needsRehash($hash_condificado)) {
            echo 'Es necesario';
        } else {
            echo 'No es necesario';
        }

        echo 'Iguales';
    } else {
        echo 'Distintos';
    }

});

Route::get('asociativo', function(){
    $collection = collect([['name' => 'Carlos', 'ape' => 'Ruiz'], ['nombre' => 'Miguel']]);

    $a = $collection->collapse();

    dd($a);
});