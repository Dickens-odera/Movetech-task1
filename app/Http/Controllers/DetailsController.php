<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Details;
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'address'=>'required',
        'location'=>'required',
        'phone'=>'required',
        //'hobby'=>'nullable'

    ]);
        //save new information
        $details = new Details;
        $details->address = $request->input('address');
        $details->location = $request->input('location');
        $details->hobby = $request->input('hobby');
        $details->phone = $request->input('phone');
        $details->user_id = auth()->user()->id; //get the id of the currently logged in user
        //$details->hobby = $request->input('hobby');
        if($details->save()){
            return redirect('welcome')->with('success','Details added successfully');
        }else{
            return redirect('welcome')->with('error','Failed to add the details');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find a single detail
        $detail = Details::find($id);
        return view('profile.show')->with('detail', $detail);
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
