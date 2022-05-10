<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class MahasiswaController extends Controller
{
	// tampil data mahasiswa
    public function index()
	{
		$mahasiswa = DB::table('mahasiswa')->get();
		return view('mahasiswa',['data_mahasiswa'
		=> $mahasiswa]);
	}

	// tampil data mahasiswa dengan template
	public function tabel_mahasiswa()
	{
		$mahasiswa = DB::table('mahasiswa')->get();
		return view('tabel_mahasiswa',['data_mahasiswa'
		=> $mahasiswa]);
	}
	
	// tambah data mahasiswa
	public function proses_tambah(Request $request)
	{
		DB::table('mahasiswa')->insert([
			'nim' => $request->nim,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'program_studi' => $request->program_studi,
			'ipk' => $request->ipk
		]);
	return redirect('/tabel_mahasiswa');
	}
	
	// ubah data mahasiswa
	public function ubah($nim)
	{
		$mahasiswa = DB :: table ('mahasiswa')->where('nim',$nim)->get();
		return view('ubah_mahasiswa',['data_mahasiswa' => $mahasiswa]);
	}

	// ubah data mahasiswa dengan template
	public function ubah_data($nim)
	{
		$mahasiswa = DB :: table ('mahasiswa')->where('nim',$nim)->get();
		return view('ubah_mahasiswa_temp',['data_mahasiswa' => $mahasiswa]);
	}
	
	
	// proses ubah data mahasiswa
	public function proses_ubah(Request $request)
	{
		DB::table('mahasiswa')->where('nim',$request->id)->update([
			'nim' => $request->nim,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'program_studi' => $request->program_studi,
			'ipk' => $request->ipk
		]);
		return redirect('/tabel_mahasiswa');
	}
	
	// hapus data mahasiswa
	public function hapus($nim)
	{
	DB::table('mahasiswa')->where('nim',$nim)->delete();
	return redirect ('/tabel_mahasiswa');
	}

		// cetak data mahasiswa (word)
	public function cetakword()
	{
	$mahasiswa = DB::table('mahasiswa')->get();
	return view('cetakword',['data_mahasiswa'
	=> $mahasiswa]);
	}

	// cetak data mahasiswa (excel)
	public function cetakexcel()
	{
	$mahasiswa = DB::table('mahasiswa')->get();
	return view('cetakexcel',['data_mahasiswa'
	=> $mahasiswa]);
	}

// cetak data mahasiswa (pdf)
	public function cetakpdf()
	{
	$mahasiswa = DB::table('mahasiswa')->get();
	$pdf = PDF::loadview('cetakpdf',['data_mahasiswa'=>$mahasiswa]);
	return $pdf->download('laporan-mahasiswa.pdf');
	}

	// cetak data mahasiswa (grafik)
	public function grafik()
	{
	$mahasiswa = DB::table('mahasiswa')->get();
	foreach($mahasiswa as $d_m){
			$nama[]= $d_m->nama;
			$ipk[]= $d_m->ipk;
		}
	return view('grafik',compact('nama','ipk'));
	}
	

}
?>