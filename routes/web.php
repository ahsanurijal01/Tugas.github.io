<?php

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

Route::get('/', function(){
    return view('index');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/mahasiswa', function(){
    return view('mahasiswa');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/tugas1', function(){
    return view('tugas1');
});

Route::get('/table1', function(){
    return view('Pertemuan5/table1');
});

Route::get('/perulangan', function(){

    $nilai_awal = 1;
    $mobi_rusak =5;
    $jumlah_mobil =10;
    while ($nilai_awal <= $jumlah_mobil) {
       // if ($nilai_awal> $mobi_rusak){
       //     echo " Mobil ke-" . $nilai_awal . 'dalam kondisi rusak<br>';

        //}else{
        //   echo "Mobil ke-" . $nilai_awal . ' beropersai dengan baik<br>';

        //}
        if ($nilai_awal <= $mobi_rusak){
            echo "Mobil ke-" . $nilai_awal . 'beroperasi dengan baik!<br>';
        }

        $nilai_awal++;
    }

    echo '<hr>';
    for ($i=$mobi_rusak + 1; $i <= $jumlah_mobil; $i++){
        echo "Mobil ke-" . $i . 'dalam kondisi rusak!<br>';
    }

});

Route::get('/table2', function(){
    $npm = ['123' ,'124', '125'];
    $nama = ['ghh', 'njk', 'ssd',];
    $jumlah = count($npm);
    return view('Pertemuan5/table2', compact('npm', 'jumlah'));
});

Route::get('/form', function(){
    return view('form');
});

Route::get('tugas2', function(){
    return view('pertemuan5/tugas2');
});

Route::get('/array', function(){
    // Infinite loop
    $nilai_awal =1;
    while ($nilai_awal <=100){
        echo 'Hello Laravel '.$nilai_awal.' X<br>';
        $nilai_awal++;

    }

});
