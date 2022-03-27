<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Semua Record Guru";
        $pagination  = 10;
        $gurus = Guru::when($request->keyword, function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->keyword}%")
                      ->orWhere('nip', 'like', "%{$request->keyword}%")
                      ->orWhere('pendidikan', 'like', "%{$request->keyword}%");
            })->orderBy('id', 'DESC')->paginate($pagination);
        $valuepage = (($gurus->currentPage() - 1) * $gurus->perPage());
        $labelcount = "Menampilkan ". ($valuepage + 1) ." sampai ". ($valuepage + $gurus->count()) . " Data dari ". $gurus->total(). " Data";
        return response()->json($gurus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Record Guru";
        return 'view';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|alpha|min:4',
            'nip' => 'required|integer|min:7',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'telp' => 'required|alpha-num|min:11',
            'photo' => 'required|mimes:jpg,jpeg,png|max:512',
        ]);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput($request->all);
		}
        Guru::creat($request->all());
        return redirect()->route('gurus.index')->with('success','Data berhasi diproses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Show Data Guru";
        $guru = Guru::findOrFail($id);
        return '';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Ubah Record Guru";
        $guru = Guru::findOrFail($id);
        // return view('',compact('title','mapel'));
        return '';
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|alpha|min:4',
            'nip' => 'required|integer|min:7',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'telp' => 'required|alpha-num|min:11',
            'photo' => 'required|mimes:jpg,jpeg,png|max:512',
        ]);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput($request->all);
		}
        $guru = Guru::find($id);
        $guru->update($request->all());
        return redirect()->route('gurus.index')->with('success','Data berhasi diproses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('gurus.index')->with('success','Data berhasi diproses');
    }
}
