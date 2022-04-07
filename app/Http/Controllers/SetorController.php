<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use App\Models\RiwayatAntar;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class SetorController extends Controller
{
    public function index(){
        return view('setor',[
            'title' => 'Setor'
        ]);
    }

    public function setor(){
        return view('setor2',[
            'title' => 'Mulai Setor',
            'jenis_sampah' => JenisSampah::all()
        ]);
    }

    public function kirimSetor(Request $request){
        $user_id = auth()->user()->id;
        $jenis_sampah_id = $request->jenis_sampah_id;
        $berat = $request->berat;
        $alamat = $request->alamat;
        $alamat_pengiriman = $request->alamat_pengiriman;
        $deskripsi_alamat = $request->deskripsi_alamat;

        $poinSekarang = auth()->user()->poin->poin;
        $poinSekarang += 50; 
        $updatePoin = DB::table('jumlah_poins')->where('user_id',auth()->user()->id)->update([
            'poin' => $poinSekarang
        ]);
        
        if ($berat < 0) {
            dd($berat);
            return redirect('/layanan/setor-barang');
        }
        RiwayatAntar::create([
            'user_id' => $user_id,
            'jenis_sampah_id' => $jenis_sampah_id,
            'berat' => $berat,
            'alamat' => $alamat,
            'alamat_pengiriman' => $alamat_pengiriman,
            'deskripsi_alamat' => $deskripsi_alamat
        ]);

        return redirect('/layanan/tunggu')->with('success', 'Kiriman kamu udah kekirim!');
    }
}
