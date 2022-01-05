<?php

use App\Models\Gaem;
use App\Models\Record;
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
    $records = Record::all();

    return view('leaderboards', ['records' => $records]);
});

Route::get('/gaem/{id}', function (int $id) {
    $gaem = Gaem::find($id);

    return view('gaem', ["gaem" => $gaem]);
});
