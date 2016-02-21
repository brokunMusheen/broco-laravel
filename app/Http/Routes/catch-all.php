<?php

Route::get('{page}', function($page) {

    $view_route = 'pages.' . str_replace('/', '.', $page);

    if(view()->exists($view_route)) {
        return view($view_route);
    } else {
        abort(404, 'Page not found');
    }

})->where('page', '[a-zA-Z0-9/]+');
