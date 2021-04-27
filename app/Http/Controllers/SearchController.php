<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Place;
use App\Models\Search;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request)
    {
        if(isset($_GET['query']))
        {
            $search_text = $_GET['query'];
            $places = DB::table('places')->where('Desa', 'LIKE', '%' .$search_text. '%')->paginate(100);
            // $provinsis = Provinsi::all();
            $places = Place::with('provinsi')->latest()->paginate(100);
            // $places = Place::with('provinsi')->latest()->paginate(100);
            // $provinsis = Provinsi::all();

            // Place::with('provinsi');
            // return view('places.search',compact('provinsis'));
            // return view('places.search',compact('place', 'pla'));

            // $provinsis = Provinsi::all();
            // Place::with('provinsi');
            // return view('places.search',compact('place', 'provinsis'));
            return view('places/search',['places'=>$places]);
            // return view('places.search',compact('places','provinsis'));
        }else
        {
            return view('places/search');
        }

        
    }
}
