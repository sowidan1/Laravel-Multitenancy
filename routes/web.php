<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return \Spatie\Multitenancy\Models\Tenant::current(); // This will return the current tenant
});
Route::get('/first-user', function () {
    return \App\Models\User::first(); // This will return the first user in the database
});
