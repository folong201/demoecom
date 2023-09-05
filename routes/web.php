<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ArticleController::class,'index']);
Route::get('/details',[ArticleController::class,'details'])->name('details');
Route::get('/article/update',[ArticleController::class,'update'])->name('article.update');
Route::post('/article/update/save',[ArticleController::class,'updateSave'])->name('update.article.save');
Route::get('/article/delete', [ArticleController::class, 'delete'])->name('article.delete');
Route::post('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::view('/article/create','createArticle');
// Route::get('/article/delete',[ArticleController::class,'delete'])->name('article.delete');
Route::post('/coment/create',[CommentaireController::class,'save'])->name('coment.create');
Route::get('/dashboard', function (Request $request) {
    $user = Auth::user();
    return view('dashboard',["articles"=>$user->articles]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
