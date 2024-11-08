<?php

use App\Http\Controllers\TestingZone\TestingZoneController;
use Illuminate\Support\Facades\Route;

Route::prefix('/testing')->middleware(['dev', 'auth'])->group(function ()
{
    Route::get('/', [TestingZoneController::class, 'welcome'])->name('testing.welcome');
});
