<?php

use Astreya\SettingsTool\Http\Controllers\SettingsToolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('/', [SettingsToolController::class, 'read']);
Route::post('/', [SettingsToolController::class, 'write']);
Route::post('/settings/manage', [SettingsToolController::class, 'manageSettings']);
