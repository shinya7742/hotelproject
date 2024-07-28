<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;

Route::get('/', [taskController::class, 'home']);
