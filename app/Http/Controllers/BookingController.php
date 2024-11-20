<?php

namespace App\Http\Controllers;
use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
 public function store ( Request $request)  {

    $validated= $request ->validate([
        'name'=>'required|string',
        'email' => 'required|email',
        'phone_no' => 'required|regex:/^[0-9]{10}$/', 
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
        'special_request' => 'nullable|string',


      ]);

      Booking::create ($validated);
      return  redirect()->back()->with('success','Booking done successfully.Welcome at EnterGlow');

 }
}
