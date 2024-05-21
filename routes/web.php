<?php
use App\Http\Controllers\ThriftyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/thrifty', function () {
    return view('thrifty');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');


Route::get('/thrifty', [ThriftyController::class, 'index'])->name('thrifty');
Route::get('/thrifties/csv-all', [ThriftyController::class, 'generateCSV']);
Route::get('/thrifties/pdf', [ThriftyController::class, 'pdf']);
Route::post('/thrifties/import', [ThriftyController::class, 'importCsv'])->name('thrifty.import');
