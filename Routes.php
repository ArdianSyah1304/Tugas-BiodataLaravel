<?php

use Illuminate\Support\Facades\Route;


Route::get('/view', function () {
    return view('biodata', [
        'nama' => 'Ardiansyah',
        'umur' => 20,
        'alamat' => 'Selebung',
        'email' => 'ardian123@email.com',
        'gambar' => 'ardian.jpg', // nama file gambar yang akan ditampilkan
    ]);
});
