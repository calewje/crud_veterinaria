<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {


    Route::get('/', [AuthController::class,'login'])->name('login');
    /*     Route::post('/registrar',[AuthController::class,'registrar'])->name(name: 'registrar');
    */    Route::post('/logear', [AuthController::class,'logear'])->name('logear');
});

Route::middleware("auth")->group(function () {   
    
    Route::get('/usuarios', [AuthController::class,'usuarios'])->name('usuarios');
    Route::post('/usuarios/activo/{id}', [AuthController::class, 'activo'])->name('usuarios.activo');

/*     Route::get(uri: '/activo/{id}', [AuthController::class,'activo'])->name('activo');*/    
    Route::get('/home', [AuthController::class,'home'])->name('home'); 
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');


});