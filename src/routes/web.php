<?php

use Aadil\Inspire\Controllers;
use Aadil\Inspire\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('inspire', InspirationController::class);
