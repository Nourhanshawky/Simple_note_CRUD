<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/note',[NoteController::class , 'index'])->name('note.index');
// Route::get('/note/create',[NoteController::class , 'create'])->name('note.create');
// Route::get('/note/{id}',[NoteController::class , 'show'])->name('note.show');
// Route::post('/note',[NoteController::class , 'store'])->name('note.store');
// Route::get('/note/{id}/edit',[NoteController::class , 'edit'])->name('note.edit');
// Route::put('/note/{id}',[NoteController::class , 'update'])->name('note.update');
// Route::delete('/note/{id}',[NoteController::class , 'delete'])->name('note.delete');

// you can replace all these lines with this one line
Route::resource('note',NoteController::class);

