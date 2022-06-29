<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\FormController;

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
});
Route::get('crud',[CrudController::class,'crudview']);
Route::get('form',[FormController::class,'formview']);
Route::post('add',[FormController::class,'add']);
Route::get('detail/{id}',[CrudController::class,'detailing']);
Route::get('delete/{id}',[CrudController::class,'delete']);
Route::get('edit/{id}',[FormController::class,'show']);
Route::post('/edit',[FormController::class,'update']);