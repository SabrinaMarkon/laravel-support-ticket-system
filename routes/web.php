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

/*
SABRINA:
In PHP, anonymous functions are called "Closure". A Closure is a function that doesn't have a name.
We use Closure to handle "routing" in small applications. In large applications, we use Controllers.
It's recommended that you should always use Controllers because Controllers help to structure your code easier. For instance, you may group all user actions into UserController, all post actions into PostsController.
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

// Route::get('/contact', 'PagesController@contact'); // moved to TicketsController
Route::get('/contact', 'TicketsController@create');

Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@index');

// any route parameter named slug will be bound to the show action of our TicketsController
Route::get('/ticket/{slug?}', 'TicketsController@show');
