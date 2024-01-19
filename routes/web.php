<?php

use Illuminate\Support\Facades\Route;


//appspower.com
Route::domain(env('APPSPOWER'))->group(base_path('routes/appspower/home.php'));
//panel.appspower.com
Route::domain(env('PANEL_APPSPOWER'))->group(base_path('routes/appspower/panel.php'));