<?php

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
    $dsn = [
    'Fathan Pebrilliestyo M.Kom',
    'Uun Jubaedah M.Pd',
    'Sarkosih Aljabari M.Pd',
    'Rizki Sarkosi M.Kom',
    'Aan Nasrudin M.Ag',
    'H. Kisut Alexandra M.Kom',
    'Stipen Wiliyam M.Kom',
    'Hj Bianca Rosalina M.Pd',
    'Rizki Darmawan M.Kom',
    'Faiha Syahla M.Pd',
    ];
    return view('dosen')->with('dosen',$dsn);
});
Route::get('/matkul', function () {
    $mk = [
        'Pemrograman Mobile',
        'Pancasila',
        'Budaya Bangsa',
        'Embedded System',
        'Pendidikan Agama Islam',
        'Framework',
        'Cloud Computing',
        'Bahasa Inggris',
        'Jaringan Komputer',
        'Kalkulus',
        ];
    return view('matakuliah')->with('matkul',$mk);;
});
Route::get('/mahasiswa', function () {
    $mhs = [
        'Patan Pebri',
        'Een Zubaedah',
        'Surkosa Indomar',
        'Riskay Ingdir',
        'Ungdur MaKola',
        'Walatangdur Makola',
        'Budi Setiawan',
        'Ilhan Piraldy',
        'Darmawan Muha',
        'Yuli Widianty',
        ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});

