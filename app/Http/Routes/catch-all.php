<?php

Route::get('{page}', function($page) {

    $view_route = 'pages.' . str_replace('/', '.', $page);

    if(view()->exists($view_route)) {
        return view($view_route);
    } else {
        return view('errors.missing', [], 404);
    }

})->where('page', '[a-zA-Z0-9/]+');
