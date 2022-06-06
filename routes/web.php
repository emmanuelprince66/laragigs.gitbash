<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//common resource routes
//index- show all datas
//show-show single data
//create-show form to create new data
//store-store new data
//edit-show form to edit data
//update-update data
//destroy-delete data



//get all listings
Route::get('/', [ListingController::class , 'index']);

//show create form
Route::get('/listings/create' , [ListingController::class, 'create'])->middleware('auth');

//store new listing
Route::post('/listings' , [ListingController::class , 'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit' , [ListingController::class , 'edit'])->middleware('auth');

//update update
Route::put('/listings/{listing}' , [ListingController::class , 'update'])->middleware('auth');

//Delete update
Route::delete('/listings/{listing}' , [ListingController::class , 'destroy'])->middleware('auth');

//manage listings
Route::get('listings/manage', [ListingController::class , 'manage'])->middleware('auth');

// single listing
Route::get('/listings/{listing}', [ListingController::class , 'show']);

//show register/create form
Route::get('/register' , [UserController::class , 'create'])->middleware('guest');

//create new user
Route::post('/users' , [UserController::class , 'store']);

//logout user
Route::post('/logout', [UserController::class , 'logout'])->middleware('auth');

//show login form
Route::get('/login' , [UserController::class , 'login'])->name('login')->middleware('guest');

//Log in user
Route::post('/users/authenticate' , [UserController::class , 'authenticate']);


