<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FurnituresController;

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::match(['get', 'post'], '/create', function () {
    if (request()->isMethod('get')){
        return app(FurnituresController::class)->create_page();
    }

    if (request()->isMethod('post')){
        return app(FurnituresController::class)->create(request());
    }

});
Route::get('/auth.form_login', [FurnituresController::class, 'index_form']);

Route::get('/table', [FurnituresController::class, 'index']);

Route::get('/update/{id}', [FurnituresController::class, 'update_page']);
Route::put('/update/{id}', [FurnituresController::class, 'update']);

Route::delete('/delete', [FurnituresController::class, 'delete']);