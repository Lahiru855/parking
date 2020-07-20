<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parking_space;
use DB;


class Parking_spaceController extends Controller
{

    public function index()
    {
       $parking_spaces = Parking_space::all();

        return view('crud.parking_spaces.index', compact('parking_spaces'));
    }


    public function detailsIndex()
    {
       $landDetails_id = Request::get ( 'landDetails_id' );
       $parking_spaces = DB::table('parking_spaces')->where('id',$landDetails_id)->get();

        return view('crud.parking_spaces.index', compact('parking_spaces'));
    }


    public function create()
    {
         return view('crud.parking_spaces.create');
    }


    public function store(Request $request)
    {
         $request->validate([
            'name'=>'required',
            'address'=>'required',
            'description'=>'required'
        ]);

        $parking_space = new Parking_space([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'description' => $request->get('description'),
            'poya' => $request->get('opentime1'),
            'bank' => $request->get('opentime2'),
            'public' => $request->get('opentime3'),
        ]);
        $parking_space->save();

        return redirect('/parking_spaces')->with('success', 'Parking_space saved!');
    }


    public function edit($id)
    {
         $parking_space = Parking_space::find($id);
        return view('crud.parking_spaces.edit', compact('parking_space'));
    }


    public function editIndex()
    {
         $landEdit_id = Request::get ( 'landEdit_id' );
         $parking_space = Parking_space::find($landEdit_id);
        return view('crud.parking_spaces.edit', compact('parking_space'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'description'=>'required'
        ]);

        $parking_space = Parking_space::find($id);
        $parking_space->name =  $request->get('name');
        $parking_space->address = $request->get('address');
        $parking_space->description = $request->get('description');
        $parking_space->poya = $request->get('open_day1');
        $parking_space->bank = $request->get('open_day2');
        $parking_space->public = $request->get('open_day3');
        $parking_space->reservation_status_on = $request->get('reservation_on');
        $parking_space->reservation_status_off = $request->get('reservation_off');
        $parking_space->verified = $request->get('verified');

        $parking_space->save();

        return redirect('/parking_spaces')->with('success', 'Parking_space updated!');
    }


    public function destroy($id)
    {
        $parking_space = Parking_space::find($id);
        $parking_space->delete();

        return redirect('/parking_spaces')->with('success', 'Parking_space deleted!');
    }
}
