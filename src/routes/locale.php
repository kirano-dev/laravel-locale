<?php

use Illuminate\Support\Facades\Route;
use KiranoDev\LaravelLocale\Http\Controllers\LocaleController;

Route::get('locale/{locale}', LocaleController::class)->name('locale');