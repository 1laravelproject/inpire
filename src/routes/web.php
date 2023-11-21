<?php

use Matrix\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Matrix\Inspire\Controllers\InspireController;
Route::get('inspire', [InspireController::class, 'invoke']);
