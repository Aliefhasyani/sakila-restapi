<?php

namespace App\Http\Controllers;

use App\Models\Warship;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Http\Request;

class WarshipController extends Controller
{
    public function index(){
        return Warship::all();
    }

    public function destroy($id){
        $warship = Warship::findOrFail($id);
        $warship->delete();
        return response()->json(['message' =>' warship deleted!'],200);
    }

    public function show($id){
        return Warship::findOrFail($id);
    }

    public function store(Request $request){
        $warship = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'type' => 'required|in:battleship,cruiser,destroyer,aircraftCarrier',
            'mainarmaments' => 'required|in:120mm,127mm,130mm,152mm,203mm,280mm,320mm,356mm,381mm,406mm,460mm',
        ]);

        Warship::create($warship);

        return response()->json(['message' =>' warship added successfully']);

    }
}
