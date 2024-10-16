<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'projects.index')->name('projects.index');

Route::view('/project/{project}', 'projects.show')->name('projects.show');
