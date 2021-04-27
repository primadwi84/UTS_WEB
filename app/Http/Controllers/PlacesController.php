<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\Provinsi;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $places = Place::with('provinsi')->latest()->paginate(100);
        return view('places.index', compact('places'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsis = Provinsi::all();
        return view('places.create',compact('provinsis'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'Desa' => 'required',
            'Kabupaten' => 'required',
            'provinsi_id' => 'required',
            'Sehat' => 'required',
            'Sakit' => 'required',
            'Dirawat' => 'required',
            'Sembuh' => 'required',
            'Zona' => 'required'
            ],
            [
                'Desa.required'=>'Nama Desa Harus Diisi!',
                'Kabupaten.required'=>'Nama Kabupaten Harus Diisi!',
                'provinsi_id.required'=>'Nama Provinsi Harus Dipilih!',
                'Sehat.required'=>'Jumlah Penduduk Sehat Harus Diisi!',
                'Sakit.required'=>'Jumlah Penduduk Sakit Harus Diisi!',
                'Dirawat.required'=>'Jumlah Penduduk Dirawat Harus Diisi!',
                'Sembuh.required'=>'Jumlah Penduduk Sembuh Harus Diisi!',
                'Zona.required'=>'Keterangan Zona Harus Diisi'
            ]
            );
        Place::create($request->all());
        return redirect('/places')->with('status', 'Data Desa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        $provinsis = Provinsi::all();
        Place::with('provinsi');
        return view('places.edit',compact('place', 'provinsis'));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $request->validate([
            'Desa' => 'required',
            'Kabupaten' => 'required',
            'provinsi_id' => 'required',
            'Sehat' => 'required',
            'Sakit' => 'required',
            'Dirawat' => 'required',
            'Sembuh' => 'required',
            'Zona' => 'required'
            ],
            [
                'Desa.required'=>'Nama Desa Harus Diisi!',
                'Kabupaten.required'=>'Nama Kabupaten Harus Diisi!',
                'provinsi_id.required'=>'Nama Provinsi Harus Dipilih!',
                'Sehat.required'=>'Jumlah Penduduk Sehat Harus Diisi!',
                'Sakit.required'=>'Jumlah Penduduk Sakit Harus Diisi!',
                'Dirawat.required'=>'Jumlah Penduduk Dirawat Harus Diisi!',
                'Sembuh.required'=>'Jumlah Penduduk Sembuh Harus Diisi!',
                'Zona.required'=>'Keterangan Zona Harus Diisi'
            ]
            );

        Place::where('id', $place->id)
            ->update([
                'Desa' => $request->Desa,
                'Kabupaten' => $request->Kabupaten,
                'provinsi_id' => $request->provinsi_id,
                'Sehat' => $request->Sehat,
                'Sakit' => $request->Sakit,
                'Dirawat' => $request->Dirawat,
                'Sembuh' => $request->Sembuh,
                'Zona' => $request->Zona
            ]);
        return redirect('/places')->with('status', 'Data Desa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        Place::destroy($place->id);
        return redirect('/places')->with('status', 'Data Desa Berhasil Dihapus!');
    }

    public function cari(Request $request){

        $cari = $request->search;  

        $places = Place::where('Desa','like','%'.$cari.'%')->get();        
        return view('places.search', ['places' => $places]);
    }

}
