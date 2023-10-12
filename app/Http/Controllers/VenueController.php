<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
class VenueController extends Controller
{
    public function home(){
        $venue = Venue::all();
        return view('home',['venues' => $venue]);
    }
    public function create(){
        return view('listing');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'capacity' => 'required | integer',
            'price' => 'required | integer',
            'description' => 'required',
        ]);

        $newVenue = Venue::create($data);

        return redirect(route('venue.home'));
    }
}
