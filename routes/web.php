<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test\pruebacontroller;
use App\Http\Controllers\prueba;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

// ***
Route::resource('post', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/writeme', function () {
    return "Contact";
});

Route::get('/contact', function () {
    return view("contact");
})->name('contact');

Route::get('/contact2', function () {
    return view("contact2");
})->name('contact2');

Route::get('/test/{mensaje}',[pruebacontroller::class,'index']);

Route::get('/prueba', function () {
    $msg = "Bienvenido";
    $data = ['msg' => $msg, 'nombre'=>'Cristian'];
    return view ('bienvenido', $data);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
