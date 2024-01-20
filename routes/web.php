<?php

use Illuminate\Support\Facades\Route;


//appspowers.com
// Route::domain(env('APPSPOWER'))->group(base_path('routes/appspower/home.php'));
//panel.appspowers.com
// Route::domain(env('PANEL_APPSPOWER'))->group(base_path('routes/appspower/panel.php'));
Route::domain(env('APPSPOWER'))->group(base_path('routes/appspower/panel.php'));