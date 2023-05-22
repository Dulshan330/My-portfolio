<?php

use GuzzleHttp\Psr7\Response;
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
    return view('welcome');
});

// Route::get('/download' ,function() {
//     $file = public_path()."/Dulshan Senadheera.pdf";
//     $headers = array (
//         'Content-Type: application/pdf',
//     );

//     return Response::download($file , "Dulshan Senadheera.pdf", $headers);
// });
