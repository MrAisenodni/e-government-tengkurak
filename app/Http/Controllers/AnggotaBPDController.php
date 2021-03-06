<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\AnggotaBPD;

class AnggotaBPDController extends Controller
{
    public function __construct() {
        $this->angbpd   = new AnggotaBPD();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'angbpd'        => $this->angbpd->getAllData(),
        ];
        return view('admin.angbpd.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.angbpd.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $current_time = Carbon::now()->toDateTimeString();

        $validated = $request->validate([
            'nip'           => 'required|unique:angbpd,nip',
            'nama'          => 'required',
            'jenkel'        => 'required',
            'agama'         => 'required',
            'alamat'        => 'required',
            'jabatan'       => 'required',
        ],[
            'nip.required'          => 'NIP harus diisi.',
            'nip.unique'            => 'NIP sudah terdaftar.',
            // 'nip.max'               => 'NIP maksimal 16 huruf.',
            // 'nip.min'               => 'NIP minimal 16 huruf.',
            'nama.required'         => 'Nama harus diisi.',
            'jenkel.required'       => 'Jenis kelamin harus diisi.',
            'agama.required'        => 'Agama harus diisi.',
            'alamat.required'       => 'Alamat harus diisi.',
            'jabatan.required'      => 'Jabatan harus diisi.',
        ]);
        
        $data = [
            'nip'           => $request->nip,
            'nama'          => $request->nama,
            'jenkel'        => $request->jenkel,
            'agama'         => $request->agama,
            'alamat'        => $request->alamat,
            'jabatan'       => $request->jabatan,
            'created_at'    => $current_time,
        ];
        
        $this->angbpd->tambahData($data);
        
        return redirect('/angbpd')->with('status', 'Data berhasil ditambahkan.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = [
            'angbpd'        => $this->angbpd->getData($id),
        ];
        return view('admin.angbpd.show', $data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'angbpd'        => $this->angbpd->getData($id),
        ];
        return view('admin.angbpd.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $current_time = Carbon::now()->toDateTimeString();

        $validated = $request->validate([
            // 'nip'           => 'required|unique:angbpd,nip',
            'nama'          => 'required',
            'jenkel'        => 'required',
            'agama'         => 'required',
            'alamat'        => 'required',
            'jabatan'       => 'required',
        ],[
            // 'nip.required'          => 'NIP harus diisi.',
            // 'nip.unique'            => 'NIP sudah terdaftar.',
            // 'nip.max'               => 'NIP maksimal 16 huruf.',
            // 'nip.min'               => 'NIP minimal 16 huruf.',
            'nama.required'         => 'Nama harus diisi.',
            'jenkel.required'       => 'Jenis kelamin harus diisi.',
            'agama.required'        => 'Agama harus diisi.',
            'alamat.required'       => 'Alamat harus diisi.',
            'jabatan.required'      => 'Jabatan harus diisi.',
        ]);
        
        $data = [
            // 'nip'           => $request->nip,
            'nama'          => $request->nama,
            'jenkel'        => $request->jenkel,
            'agama'         => $request->agama,
            'alamat'        => $request->alamat,
            'jabatan'       => $request->jabatan,
            'updated_at'    => $current_time,
        ];
        
        $this->angbpd->ubahData($data, $id);
        
        return redirect('/angbpd')->with('status', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->angbpd->hapusData($id);

        return redirect('/angbpd')->with('status', 'Data berhasil dihapus.');
    }
}
