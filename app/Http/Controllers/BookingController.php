<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view ('Booking', compact('Booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
public function create()
    {
        return view('Booking');
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
        'name'=>'required',
        'treatment'=> 'required|integer',
        'date' => 'required|integer',
        'email' => 'required|integer',
        'number' => 'required|integer'
      ]);

      $share = new Share([
        'name' => $request->get('name'),
        'treatment'=> $request->get('treatment'),
        'date'=> $request->get('date'),
        'email'=> $request->get('email'),
        'number'=> $request->get('number'),


      ]);
      $share->save();
      return redirect('/shares')->with('success', 'Booking has been added');
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
        //
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
    }
}













    /*     $booking = Booking::create($validatedData);

     return redirect('/bookings')->with('success', 'Thank you, your treatment has been booked');

       if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }

//store the booking
    }*/
/*
    public function store(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'treatement'=> 'required|integer',
        'date' => 'required|integer',
        'email'=>'required|date',
        'number'=>'required|integer'
      ]);
      $share = new Share([
        'share_name' => $request->get('share_name'),
        'share_price'=> $request->get('share_price'),
        'share_qty'=> $request->get('share_qty')
      ]);
      $share->save();
      return redirect('/shares')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*  public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *//*
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function destroy($id)
    {
        //
    }
}*/