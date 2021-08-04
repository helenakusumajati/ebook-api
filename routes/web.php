<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/*
Route::get('/me', function () {
	return response()-> json(
		[
			'NIS'     => '3103119084',
			'Name'    => 'Helena Kusumajati',
			'Gender'  => 'Female',
			'Phone'   => '089669372169',
			'Class'   => 'XII RPL 3'
		]
	);
});
*/

Route::get('/me', [AuthController::class, 'me']);