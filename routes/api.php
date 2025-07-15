<?php


use App\Http\Controllers\WarshipController;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::apiResource('warship',WarshipController::class);
