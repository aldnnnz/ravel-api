<?php

use App\Http\Controllers\API\V1\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\JenisPenggunaController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::prefix('v1')->group(function () {
    Route::apiResource('/pengguna', PenggunaController::class);
    Route::patch('/pengguna/{pengguna}/jenis', JenisPenggunaController::class);
    // Route::get('/pengguna', function (Request $request) {
    //     return $request->user();
    // })->middleware('auth:sanctum');
});
