<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FullCalenderController;
  
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(FullCalenderController::class)->group(function(){
Route::get('fullcalendar', [FullCalendarController::class, 'index']);
Route::post('create-event', [FullCalendarController::class, 'create']);
Route::post('event-update', [FullCalendarController::class, 'update']);
Route::post('event-delete', [FullCalendarController::class, 'delete']);
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();});

