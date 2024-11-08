<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('setDeveloper', function () {
    $user = User::first();
    if ($user) {
        $user->isDeveloper = 1;
        $user->save();
        $this->info('First user is now a developer!');
    } else {
        $this->info('No users found in the database.');
    }
});
