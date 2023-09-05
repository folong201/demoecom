<?php

use App\Http\Controllers\FormationController;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return User::all();
    });

    Route::get("/bonjour", function () {
        return "Bonjour";
    });
    Route::post("/getform", function (Request $request) {
        return $request->all();
    });

    Route::get('/', [FormationController::class, 'index']);
    Route::get('/show/{id}', [FormationController::class, 'show']);
    Route::post('/save', [FormationController::class, 'save']);
    Route::post('/update/{id}', [FormationController::class, 'update']);
    //
});

Route::post('/register', [FormationController::class, 'register']);
Route::post('/login', [FormationController::class, 'login']);
