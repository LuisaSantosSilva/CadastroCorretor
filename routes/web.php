<?php

use App\Http\Controllers\CorretorController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CorretorController::class, "index"]);
Route::post("/adicionar", [CorretorController::class, "adicionar"]);
Route::get("/editar/{id}", [CorretorController::class, "editar"]);
Route::post("/atualizar/{id}", [CorretorController::class, "atualizar"]);
Route::get("/excluir/{id}", [CorretorController::class, "excluir"]);