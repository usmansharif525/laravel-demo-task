<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/settings', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/settings', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/search-news', [NewsController::class, 'searchNews'])->name('search-news');
Route::middleware('auth:sanctum')->get('/news-sources', [NewsController::class, 'getSources'])->name('news-sources');
Route::middleware('auth:sanctum')->get('/top-headlines', [NewsController::class, 'getTopHeadlines'])->name('top-headlines');

Route::post('/auth/register', [AuthController::class, 'createUser'])->name('auth.register');
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('auth.login');


