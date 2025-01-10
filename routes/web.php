<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PopulationStatisticsController;

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

 Route::get('/', function () {
    return view('welcome');
}
  
 );
 Route::get('edgs', function () {
     return view('edgs');
}
  
 );

 Route::get('foo',function()
 {
 return'Bar';
  });

 Route::get('articles','ArticlesController@index');

 Route::get('Population_statistics',[PopulationStatisticsController::class, 'index']);



Route::get('/population/create', [PopulationStatisticsController::class, 'create'])->name('population.create');
Route::post('/population', [PopulationStatisticsController::class, 'store'])->name('population.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Define the route for 'edgs.blade.php'

