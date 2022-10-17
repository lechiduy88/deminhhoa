<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('student_manage', [StudentController::class, 'get_all_student']);

Route::get('student_manage/create', [StudentController::class, 'create']);

Route::post('student_manage/create', [StudentController::class, 'store']);

Route::get('student_manage/{id}/edit', [StudentController::class, 'get_student_by_id']);

Route::put('student_manage/{id}/edit', [StudentController::class, 'update']);

Route::get('student_manage/{id}/delete', [StudentController::class, 'delete']);
