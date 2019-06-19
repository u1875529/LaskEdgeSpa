<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $appointments = Appointment::all();

        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('appointments.create');
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
        'first_name'=>'required',
        'last_name'=> 'required',
        'date' => 'required|date',
        'treatment' => 'required',
        'email' => 'required',
        'phone_number' => 'required'
      ]);

      $appointment = new Appointment([
        'first_name' => $request->get('first_name'),
        'last_name'=> $request->get('last_name'),
        'date'=> $request->get('date'),
        'treatment'=> $request->get('treatment'),
        'email'=> $request->get('email'),
        'phone_number'=> $request->get('phone_number')
      ]);

      $appointment->save();
      return redirect('/appointments')->with('success', 'Your appointment has been booked');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);

        return view('appointments.edit', compact('appointment'));
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
        $request->validate([
        'first_name'=>'required',
        'last_name'=> 'required|integer',
        'date' => 'required|date',
        'treatment' => 'required|integer',
        'email' => 'required|integer',
        'phone_number' => 'required|integer'
      ]);

      $share = Share::find($id);
      $share->first_name = $request->get('first_name');
      $share->last_name = $request->get('last_name');
      $share->date = $request->get('date');
      $share->treatment = $request->get('treatment');
      $share->email = $request->get('email');
      $share->phone_number = $request->get('phone_number');
      $share->save();

      return redirect('/appointments')->with('success', 'Appointment has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $appointment = Appointment::find($id);
         $appointment->delete();

     return redirect('/appointments')->with('success', 'Appointment has been deleted Successfully');
    }
}
