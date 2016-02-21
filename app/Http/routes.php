<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});


/*
|--------------------------------------------------------------------------
| Catch-All Route
|--------------------------------------------------------------------------
|
| This route will catch any requests that haven't been caught, and try to
  route the user to pages within the /pages views directory.

  Examples:
    /welcome           routes to   (views dir)/pages/welcome.blade.php
    /videos/hunting    routes to   (views dir)/pages/videos/hunting.blade.php
|
*/
require_once __DIR__ . '/Routes/catch-all.php';
