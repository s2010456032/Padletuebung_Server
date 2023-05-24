<?php

use App\Http\Controllers\PadletController;
use App\Http\Controllers\EntryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('padlets', [PadletController::class,'index']);
Route::get('padlets/{id}', [PadletController::class,'findById']);
Route::get('padlets/checkid/{id}', [PadletController::class,'checkId']);
Route::get('padlets/search/{searchTerm}', [PadletController::class,'findBySearchTerm']);

Route::get('entries', [EntryController::class,'index']);
Route::get('entries/{id}', [EntryController::class,'findById']);
Route::get('entries/checkid/{id}', [EntryController::class,'checkId']);
Route::get('entries/search/{searchTerm}', [EntryController::class,'findBySearchTerm']);

/* auth */
Route::post('auth/login', [AuthController::class,'login']);


/* Alle Routen für die man eingeloogt sein muss*/
//Route::group(['middleware' => ['api','auth.jwt']], function(){

    Route::post('padlets', [PadletController::class,'save']);
    Route::put('padlets/{id}', [PadletController::class,'update']);
    Route::delete('padlets/{id}', [PadletController::class,'delete']);

    Route::post('entries', [EntryController::class,'save']);
    Route::put('entries/{id}', [EntryController::class,'update']);
    Route::delete('entries/{id}', [EntryController::class,'delete']);

    /* auth */
    Route::post('auth/logout', [AuthController::class,'logout']);
//});




