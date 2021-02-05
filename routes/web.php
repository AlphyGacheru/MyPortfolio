<?php

use App\Mail\EmailFromClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/my-work', function () {
    return view('my-work');
})->name('my-work');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $clientDetails = $request->validate([
        'name' => 'required | string',
        'email' => 'required | email',
        'message' => 'required | string',
    ]);


  

Mail::to('alphycomedian@gmail.com')
        ->send(new EmailFromClient($clientDetails));

    return redirect(route('contact'))
        ->with('flash', 'Message Sent Successfully');


});
