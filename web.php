<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\DataKurikulumUserController;
use App\Http\Controllers\DataKurikulumUtamaController;

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
    //return view('welcome');
    return view('homepage');
});

Route::get('/users/signup', [UserController::class,'signup'])
    ->name('users.create');

Route::post('/users', [MahasiswaController::class,'store'])
    ->name('mahasiswas.store'); 

Route::get('/students', [StudentController::class,'index'])
    ->name('students.index');

Route::get('/students/create', [StudentController::class,'create'])
    ->name('students.create');

    Route::post('/students', [StudentController::class,'store'])
    ->name('students.store'); 

Route::get('/students/{student}', [StudentController::class,'show'])
    ->name('students.show');

Route::get('/students/{student}/edit', [StudentController::class,'edit'])
    ->name('students.edit');

Route::put('/students/{student}', [StudentController::class,'update'])
    ->name('students.update');

Route::delete('/student/{student}', [StudentController::class,'destroy'])
    ->name('students.destroy');
    

Route::prefix('/user')->group(function () {
    Route::get('/find', [UserController::class,'find']);
    Route::get('/where', [UserController::class,'where']);
    Route::get('/where-chaining', [UserController::class,'whereChaining']);
    Route::get('/all-join', [UserController::class,'allJoin']);
    Route::get('/has', [UserController::class,'has']);
    Route::get('/where-has', [UserController::class,'whereHas']);
    Route::get('/doesnt-have', [UserController::class,'doesntHave']);
    Route::get('/where-doesnt-have', [UserController::class,'whereDoesntHave']);
    Route::get('/insert-save', [UserController::class,'insertSave']);
    Route::get('/insert-create', [UserController::class,'insertCreate']);
    Route::get('/update', [UserController::class,'update']);
    Route::get('/update-push', [UserController::class,'updatePush']);
    Route::get('/update-push-where', [UserController::class,'updatePushWhere']);
    Route::get('/delete-find', [UserController::class,'deleteFind']);
    Route::get('/delete-where', [UserController::class,'deleteWhere']);
    Route::get('/delete-if', [UserController::class,'deleteIf']);
    Route::get('/delete-cascade', [UserController::class,'deleteCascade']);
});
    
Route::prefix('/student')->group(function () {
    Route::get('/find', [StudentController::class,'find']);
    Route::get('/where', [StudentController::class,'where']);
    Route::get('/where-chaining', [StudentController::class,'whereChaining']);
    Route::get('/has', [StudentController::class,'has']);
    Route::get('/has-eager', [StudentController::class,'hasEager']);

    Route::get('/test-input-1', [StudentController::class,'testInput1']);
    Route::get('/test-input-2', [StudentController::class,'testInput2']);
    Route::get('/test-input-3', [StudentController::class,'testInput3']);
    Route::get('/test-input-4', [StudentController::class,'testInput4']);

    Route::get('/associate-new', [StudentController::class,'associateNew']);
    Route::get('/associate-find', [StudentController::class,'associateFind']);

    Route::get('/delete', [StudentController::class,'delete']);
    Route::get('/delete-Student', [StudentController::class,'deleteStudent']);
});
    
Route::prefix('/kurikulum')->group(function () {
    Route::get('/find', [KurikulumController::class,'find']);
    Route::get('/where', [KurikulumController::class,'where']);
    Route::get('/all-join', [KurikulumController::class,'allJoin']);

    Route::get('/has', [KurikulumController::class,'has']);
    Route::get('/where-has', [KurikulumController::class,'whereHas']);
    Route::get('/doesnt-have', [KurikulumController::class,'doesntHave']);

    Route::get('/with-count', [KurikulumController::class,'withCount']);
    Route::get('/load-count', [KurikulumController::class,'loadCount']);

    Route::get('/insert-save', [KurikulumController::class,'insertSave']);
    Route::get('/insert-create', [KurikulumController::class,'insertCreate']);
    Route::get('/insert-create-many', [KurikulumController::class,'insertCreateMany']);

    Route::get('/update', [KurikulumController::class,'update']);
    Route::get('/update-push', [KurikulumController::class,'updatePush']);

    Route::get('/delete', [KurikulumController::class,'delete']);
});
    