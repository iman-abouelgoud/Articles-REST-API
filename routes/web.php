<?php

use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Resources\V1\ArticleCollection;
use App\Models\Article;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// Route::get('/test/{article}', [ArticleController::class, 'show']);

require __DIR__.'/auth.php';
