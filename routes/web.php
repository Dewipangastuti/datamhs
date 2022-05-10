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
            return view('welcome');
        });

        Route::get('/mahasiswa', function () {
            return view('mahasiswa');
        });

        // menampilkan halaman mahasiswa
        Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');

        // menampilkan halaman mahasiswa dengan template
        Route::get('/tabel_mahasiswa','App\Http\Controllers\MahasiswaController@tabel_mahasiswa');

        // menampilkan halaman tambah mahasiswa
        Route::get('/tambah',function () 
            {return view('tambah_mahasiswa');
        });

        // menampilkan halaman tambah mahasiswa dengan template
        Route::get('/tambah_data',function () 
            {return view('tambah_mahasiswa_temp');
        });
        
        // proses tambah
        Route::post('/proses_tambah','App\Http\Controllers\MahasiswaController@proses_tambah');

        // ubah data mahasiswa
        Route::get('/ubah/{nim}','App\Http\Controllers\MahasiswaController@ubah');
        Route::get('/ubah_data/{nim}','App\Http\Controllers\MahasiswaController@ubah_data');
        Route::post('/proses_ubah','App\Http\Controllers\MahasiswaController@proses_ubah');

        // hapus data mahasiswa
        Route::get('/hapus/{nim}','App\Http\Controllers\MahasiswaController@hapus');

        // cetak data mahasiswa (word)
        Route::get('/cetakword','App\Http\Controllers\MahasiswaController@cetakword');

        // cetak data mahasiswa (excel)
        Route::get('/cetakexcel','App\Http\Controllers\MahasiswaController@cetakexcel');

        // cetak data mahasiswa (pdf)
        Route::get('/cetakpdf','App\Http\Controllers\MahasiswaController@cetakpdf');

        // cetak data mahasiswa ()grafik
        Route::get('/grafik','App\Http\Controllers\MahasiswaController@grafik');

?>