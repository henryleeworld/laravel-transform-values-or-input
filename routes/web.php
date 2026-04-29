<?php

use App\Http\Controllers\TransformerController;
use Illuminate\Support\Facades\Route;

Route::get('transformer/', [TransformerController::class, 'show']);
