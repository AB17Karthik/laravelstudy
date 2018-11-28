<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'home page';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $val=$request->all();
    //    return view('store',['a'=>$val]);
    $validatedData = $request->validate([
        'id'    =>'required|Alpha_Numeric',
        'name'  =>'required|Alpha',
        'pwd'   =>'required|Alpha Numeric',
        'email' => 'required|email',
        'dob'   =>'required|date',
        'sslc'  =>'required',
        'hsc'   =>'required',
        'cont'  =>'required|digits_between:7,10|numeric'//worked all
        
    ],[
        
        'id.required'=>'id requireddd',
        'id.Alpha_Numeric'=>'id must alpha numeric',

        'name.required'=>'enter Your name requireddd',
        'name.Alpha'=>'enter the charaters only',

        'pwd.required'=>'password requireddd',

        'email.required' => 'email need to be requireddd',
        'date.required'=>' date requireddd',
        'sslc.required'=>'sslc percentage requireddd',
        
        'hsc.required'=>'sslc percentage requireddd',
        
        'cont.required'=>'mobile num required',
        'cont.digits_between'=>'contact should be atleast 7 number',
        'cont.numeric'=>'contact should be the digits only ',
        

        //'email.email' => 'valid email id',
        //'pwd.min'=>'must 8 char minimum'
        
    ]);
     
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
