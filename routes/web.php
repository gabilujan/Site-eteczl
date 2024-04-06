<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/departamentos', function () {
    return view('departamentos');
});

Route::get('/oportunidades', function () {
    return view('oportunidades');
});

Route::get('/vestibulinho', function () {
    return view('vestibulinho');
});

Route::get('/instituição', function () {
    return view('instituição');
});




