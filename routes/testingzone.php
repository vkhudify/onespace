<?php

use App\Http\Controllers\TestingZone\TestingZoneController;
use Illuminate\Support\Facades\Route;

Route::prefix('/testing')->middleware('dev')->group(function ()
{
    Route::get('/', [TestingZoneController::class, 'welcome'])->name('testing.welcome')->middleware('dev');
});
