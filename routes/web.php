<?php

use App\Http\Controllers\InvitationController;
use App\Models\Invitation;
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

Route::get('/', function () {
    return view('Template.general');
});

Route::get('wedding/invitation/{name}/{uniqid}', [InvitationController::class, 'index'])->name('Invitation');
Route::post('wedding/kehadiran/{id}', [InvitationController::class, 'status_kehadiran'])->name('kehadiran');
Route::resource('wedding', InvitationController::class);
