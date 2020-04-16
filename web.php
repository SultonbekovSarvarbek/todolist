<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('tasks.index');
// });

Route::get('/', 'PostController@tasks');



// Route::post('/', function () {
//     return view('tasks.index');
// });
Route::post('/task', 'PostController@store');

// Route::get('/', function () {
//     return view('tasks.index');
// });


// Route::get('/task/{id}/destroy', ['uses' => 'PostController@destroy', 'as' => 'taks.destroy']);

// Route::get('/task/edit/{id}', function(){

//     Task::findOrFail($id)->delete();

//     return view('tasks.index');

// });
// Route::delete('/task/{task}', function (Task $task) {
	
// });
