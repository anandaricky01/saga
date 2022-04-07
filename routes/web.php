<?php

use App\Models\User;
use App\Models\Category;
use App\Models\JumlahPoin;
use App\Models\RiwayatKupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\KolegaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiwayatKuponController;
use App\Http\Controllers\CariUniversalController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\SocialShareButtonsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// beranda -----------------------------
    Route::get('/',function(){
        return view('landingPage',[
            'title'=>'Sampah Juga Berharga',
            'active' => 'beranda'
        ]);
    });

    Route::post('/', [FormController::class, 'send']);

    Route::get('/cari', [CariUniversalController::class, 'index']);
// akhir beranda -----------------------

// about -------------------------------
    Route::get('/about',function(){
        return view('about',[
            'title'=>'About',
            'active' => 'about'
        ]);
    });
// akhir about --------------------------

// ttgtim -------------------------------
    Route::get('/tentang/tim', function(){
        return view('ttgtim',[
            'title' => 'Tim Kami'
        ]);
    });
// akhir ttgtim -------------------------

// ttgsaga ------------------------------
    Route::get('/tentang/saga', function(){
        return view('ttgsaga', [
            'title' => 'Tentang Saga'
        ]);
    });
// akhir ttgsaga ------------------------

// kolega -------------------------------
    Route::get('/layanan/kolega', [KolegaController::class, 'index']);
// akhir kolega -------------------------

// kurir --------------------------------
    Route::get('/layanan/kurir', function(){
        return view('kurir',[
            'title' => 'Kurir'
        ]);
    });
// akhir kurir --------------------------

// setor --------------------------------
    Route::get('/layanan/setor', [SetorController::class, 'index']);

    Route::get('/layanan/setor-barang', [SetorController::class, 'setor'])->middleware('auth');

    Route::post('/layanan/setor-barang', [SetorController::class, 'kirimSetor'])->middleware('auth');

    Route::get('/layanan/tunggu', function(){
        if (session()->has('success')) {
            return view('setortunggu1',[
                'title' => 'Setor'
            ]);
        } else {
            return redirect('/layanan/setor-barang');
        }
    });

    Route::get('/layanan/tunggu-lagi', function(){
        return view('setortunggu2',[
            'title' => 'Setor'
        ]);
    });

    Route::get('/layanan/tunggu-lagi-lagi', function(){
        return view('setortunggu3',[
            'title' => 'Setor'
        ]);
    });
// akhir setor --------------------------

// FAQ ----------------------------------
    Route::get('/faq', function(){
        return view('faq',[
            'title'=>'FAQ',
            'active' => 'faq'
        ]);
    });
// akhir FAQ ----------------------------


// artikel ------------------------------
    Route::get('/artikel', [ArtikelController::class,'index']);
    Route::get('/artikel/{artikel:slug}', [ArtikelController::class,'show']);
// akhir artikel ------------------------

// login dan register -------------------
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
// akhir login dan register -------------

// dashboard ----------------------------
    Route::get('/dashboard', [DashboardController::class, 'view'])->middleware('auth');
    Route::post('/dashboard/ubahData', [DashboardController::class, 'ubahData']);
    Route::post('/dashboard/claimVoucher', [DashboardController::class, 'claimVoucher']);
    Route::get('/dashboard/riwayat-kupon', [RiwayatKuponController::class, 'index'])->middleware('auth');
    Route::resource('/dashboard/artikel', DashboardArtikelController::class)->middleware('auth');
    // akhir dashboard ----------------------

// Rerouting ----------------------------
    Route::get('/layanan', function () {
        return redirect('/layanan/kolega');
    });
// akhir rerouting ----------------------

Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);