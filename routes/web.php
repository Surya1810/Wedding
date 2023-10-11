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
    return view('Template.Invitation');
});

Route::get('wedding/invitation/{uniqid}', [InvitationController::class, 'index'])->name('Invitation');
Route::resource('wedding', InvitationController::class);
