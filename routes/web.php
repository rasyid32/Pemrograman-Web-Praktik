<?php

use App\Http\Controllers\itemController;
use Illuminate\Support\Facades\Route;




Route::resource('/item', itemController::class);
