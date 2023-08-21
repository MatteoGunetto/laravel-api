<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

Route::get('/test-api', [ProjectController::class, 'testApi']);
