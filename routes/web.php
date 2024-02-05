<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    // dd($id);
    // ddd($id);
    return response('post '. $id);
})-> where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    // dd($request);
    return response('from the hyperlink comes '. $request->test);
});


Route::get('/listings', function () {
    return view('listings' ,[
        'heading' => 'Listings',
        'listings' => [[
            'Listings 1',
            'Listings 2',
            'Listings 3',
            'Listings 4',
            'Listings 5',
        ],
        [
            'Listings 6',
            'Listings 7',
            'Listings 8',
            'Listings 9',
            'Listings 10',
        ]
        
    ]
    ] 
);
});

