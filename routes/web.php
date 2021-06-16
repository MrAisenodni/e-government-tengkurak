<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\PenduduksController;
use App\Http\Controllers\PengaduansController;
use App\Http\Controllers\PesansController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AnggotaBPDController;
use App\Http\Controllers\KritikSaranController;

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

/*
    =============================
    =       ROUTES USER         =
    =============================
*/

// Routes Profil Desa
Route::get('/', [PagesController::class, 'home']);
Route::get('/sejarah', [PagesController::class, 'sejarah']);
Route::get('/wilayah', [PagesController::class, 'wilayah']);
Route::get('/peta', [PagesController::class, 'peta']);

// Routes Pemerintah Desa
Route::get('/pemda', [PagesController::class, 'pemda']);
Route::get('/visimisi', [PagesController::class, 'visimisi']);
Route::get('/bpd', [PagesController::class, 'bpd']);

// Routes Lembaga Masyarakat
Route::get('/lem', [PagesController::class, 'lem']);
Route::get('/lpm', [PagesController::class, 'lpm']);
Route::get('/karangtaruna', [PagesController::class, 'karangtaruna']);
Route::get('/pkk', [PagesController::class, 'pkk']);

// Routes Data Desa
Route::get('/dapen', [PagesController::class, 'pendidikan']);
Route::get('/dapek', [PagesController::class, 'pekerjaan']);
Route::get('/dajen', [PagesController::class, 'jenkel']);
Route::get('/daper', [PagesController::class, 'perkawinan']);

// Routes Pengaduan
Route::get('/pengaduan/create', [PengaduansController::class, 'create']);

/*
    ==============================
    =       ROUTES LOGIN         =
    ==============================
*/

Auth::routes();

// Routes Login Admin/Operator Desa
Route::get('/login', [LoginsController::class, 'index']);

/*
    ==============================
    =       ROUTES ADMIN         =
    ==============================
*/

// Routes Admin
Route::get('/dashboard', [PagesController::class, 'admin']);

// Routes Admin mengelola Penduduk
Route::get('/penduduk', [PenduduksController::class, 'index']);
Route::get('/penduduk/create', [PenduduksController::class, 'create']);
Route::get('/penduduk/edit/{id}', [PenduduksController::class, 'edit']);
Route::get('/penduduk/{id}', [PenduduksController::class, 'show']);
Route::post('/penduduk', [PenduduksController::class, 'store']);
Route::put('/penduduk/{id}', [PenduduksController::class, 'update']);
Route::delete('/penduduk/{id}', [PenduduksController::class, 'destroy']);

// Routes Admin mengelola Pengaduan
Route::get('/pengaduan', [PengaduansController::class, 'index']);
Route::get('/pengaduan/create', [PengaduansController::class, 'create']);
Route::get('/pengaduan/edit/{id}', [PengaduansController::class, 'edit']);
Route::get('/pengaduan/{id}', [PengaduansController::class, 'show']);
Route::post('/pengaduan', [PengaduansController::class, 'store']);
Route::put('/pengaduan/{id}', [PengaduansController::class, 'update']);
Route::delete('/pengaduan/{id}', [PengaduansController::class, 'destroy']);

// Routes Admin mengelola Desa
Route::get('/profildesa', [DesaController::class, 'index']);
Route::get('/profildesa/create', [DesaController::class, 'create']);
Route::get('/profildesa/edit/{id}', [DesaController::class, 'edit']);
Route::get('/profildesa/{id}', [DesaController::class, 'show']);
Route::post('/profildesa', [DesaController::class, 'store']);
Route::put('/profildesa/{id}', [DesaController::class, 'update']);
Route::delete('/profildesa/{id}', [DesaController::class, 'destroy']);

// Routes Admin mengelola Anggota BPD
Route::get('/angbpd', [AnggotaBPDController::class, 'index']);
Route::get('/angbpd/create', [AnggotaBPDController::class, 'create']);
Route::get('/angbpd/edit/{id}', [AnggotaBPDController::class, 'edit']);
Route::get('/angbpd/{id}', [AnggotaBPDController::class, 'show']);
Route::post('/angbpd', [AnggotaBPDController::class, 'store']);
Route::put('/angbpd/{id}', [AnggotaBPDController::class, 'update']);
Route::delete('/angbpd/{id}', [AnggotaBPDController::class, 'destroy']);

// Routes Admin mengelola Kritik dan Saran
Route::get('/kritiksaran', [KritikSaranController::class, 'index']);
Route::get('/kritiksaran/create', [KritikSaranController::class, 'create']);
Route::get('/kritiksaran/edit/{id}', [KritikSaranController::class, 'edit']);
Route::get('/kritiksaran/{id}', [KritikSaranController::class, 'show']);
Route::post('/kritiksaran', [KritikSaranController::class, 'store']);
Route::put('/kritiksaran/{id}', [KritikSaranController::class, 'update']);
Route::delete('/kritiksaran/{id}', [KritikSaranController::class, 'destroy']);

/*
=================================
=       ROUTES OPERATOR         =
=================================
*/

// Routes Operator
Route::get('/operator/dashboard', [PagesController::class, 'operator']);

// Routes Admin mengelola Pengaduan
Route::get('/operator/pengaduan', [PesansController::class, 'index']);
Route::get('/operator/pengaduan/create', [PesansController::class, 'create']);
Route::get('/operator/pengaduan/edit/{id}', [PesansController::class, 'edit']);
Route::get('/operator/pengaduan/{id}', [PesansController::class, 'show']);
Route::post('/operator/pengaduan', [PesansController::class, 'store']);
Route::put('/operator/pengaduan/{id}', [PesansController::class, 'update']);
Route::delete('/operator/pengaduan/{id}', [PesansController::class, 'destroy']);

// Routes Admin mengelola Kritik dan Saran
Route::get('/operator/kritiksaran', [KritikSaranController::class, 'index']);
Route::get('/operator/kritiksaran/create', [KritikSaranController::class, 'create']);
Route::get('/operator/kritiksaran/edit/{id}', [KritikSaranController::class, 'edit']);
Route::get('/operator/kritiksaran/{id}', [KritikSaranController::class, 'show']);
Route::post('/operator/kritiksaran', [KritikSaranController::class, 'store']);
Route::put('/operator/kritiksaran/{id}', [KritikSaranController::class, 'update']);
Route::delete('/operator/kritiksaran/{id}', [KritikSaranController::class, 'destroy']);