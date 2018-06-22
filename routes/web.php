<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

/**
 * root parameter
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * about
 */
Route::get('/about', function () {
    return print_r($_REQUEST, true);
});

/**
 * Route with parameter
 */
Route::get('/contact/{id}', function ($id) {
    return "This is contact : $id";
});

/**
 * Route with multiple parameter
 */
Route::get('/category/{id}/userId/{userId}', function ($id, $userId) {
    return "This is category : $id, for $userId";
});

/**
 * nickname or alias for route
 * from console, you can check route using $ php artisan route:list
 */

Route::get('/admin/login', ['as' => 'admin.login', function () {

    $url = route('admin.login');

    return "this url is $url";
}]);



/**
 * route to controller
 */

Route::get('/test', 'TestController@index');
Route::get('/test/{id}', 'TestController@show');

/**
* Route to controller resource...
*/

Route::get('post/contact/', 'PostController@contact');
Route::resource('post', 'PostController');



