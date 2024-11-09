<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'lamaran' => Lamaran::orderBy('id', 'asc')->paginate(15)
        ]);
    }


    public function create()
    {
        return view('admin.dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kota' => 'required',
            'tanggal' => 'required',
            'kepada' => 'required',
            'pt' => 'required',
            'alamatpt' => 'required',
            'loker' => 'required',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'pendidikan' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'lampiran' => 'required',
        ]);

        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->lampiran, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();
  
        Lamaran::create([
            'kota' => $request->kota,
            'tanggal' => $request->tanggal,
            'kepada' => $request->kepada,
            'pt' => $request->pt,
            'alamatpt' => $request->alamatpt,
            'loker' => $request->loker,
            'nama' => $request->nama,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'slug' => Str::slug($request->nama, '-'),
            'lampiran' => $dom->saveHTML(),
        ]);
   
        return redirect(route('dashboard'))->with('success', 'data berhasil di hapus');
        
    }

    public function edit($id) {
        $lamaran = Lamaran::find($id);
        return view('admin.dashboard', [
            'faq' => $lamaran
        ]);
    }

    //update
    public function update(Request $request, $id)
    {
        $lamaran = Lamaran::find($id);

        $lamaran->kota = $request->input('kota');
        $lamaran->tanggal = $request->input('tanggal');
        $lamaran->kepada = $request->input('kepada');
        $lamaran->pt = $request->input('pt');
        $lamaran->alamatpt = $request->input('alamatpt');
        $lamaran->loker = $request->input('loker');
        $lamaran->nama = $request->input('nama');
        $lamaran->tempatlahir = $request->input('tempatlahir');
        $lamaran->tanggallahir = $request->input('tanggallahir');
        $lamaran->jeniskelamin = $request->input('jeniskelamin');
        $lamaran->pendidikan = $request->input('pendidikan');
        $lamaran->alamat = $request->input('alamat');
        $lamaran->hp = $request->input('hp');
        $lamaran->lampiran = $request->input('lampiran');

        $lamaran->save();
        return redirect(route('dashboard'))->with('success', 'Item updated successfully');
    }

    public function destroy($id) {
        $faq = Lamaran::find($id);

        if ($faq) {
            // Delete the record
            $faq->delete();
        }

        return redirect(route('dashboard'))->with('success', 'data berhasil di hapus');
    }
}
