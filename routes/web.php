<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VulnerabilityController;

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

Route::get('/', [VulnerabilityController::class, 'index'])->name('vulnerability.index');
Route::get('/view/{slug}', [VulnerabilityController::class, 'view'])->name('vulnerability.view');
Route::get('/create', [VulnerabilityController::class, 'create'])->name('vulnerability.create');
Route::post('/input', [VulnerabilityController::class, 'input'])->name('vulnerability.input');
Route::get('/edit/{slug}', [VulnerabilityController::class, 'edit'])->name('vulnerability.edit');
Route::post('/update/{slug}', [VulnerabilityController::class, 'update'])->name('vulnerability.update');
Route::get('/delete/{slug}', [VulnerabilityController::class, 'delete'])->name('vulnerability.delete');