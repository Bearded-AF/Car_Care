<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;

class ConsumerController extends Controller
{
    public function bookservice()
    {
      if(Auth::id())
      {
        $usertype = 1;
        $garages = user::where('usertype','=', $usertype)->get();
        $id = Auth::user()->id;
        $consumers = user::where('id','=',$id)->get();
        return view('consumer.book_service',compact('garages','consumers'));
      }

      else {
        return redirect()->back();
      }

    }

    public function upload(Request $request)
    {
      $data = new booking;
      $data->consumername = $request->name;
      $data->consumerid = Auth::user()->id;
      $data->address = $request->address;
      $data->phone = $request->phone;
      $data->service = $request->service;
      $data->servicetype = $request->type;
      $data->garagename = $request->garage;
      $data->status = 'Pending Garage Approval';
      $data->save();

      return redirect()->back()->with('message', 'Your Service Request Has Been Sent To The Garage');
    }

    public function servicerequest(Request $request)
    {
      $id = $request->name;
      $service = booking::where('id','=',$id)->get();
      return view('consumer.my_service_show', compact('service'));
    }
}
