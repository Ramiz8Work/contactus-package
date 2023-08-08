<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Ramiz\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'getContactPage'])->name('contact');
Route::post('contactme',[ContactController::class,'sendMailContact'])->name('contactMail');