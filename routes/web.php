<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return \Spatie\Multitenancy\Models\Tenant::current(); // This will return the current tenant
});
