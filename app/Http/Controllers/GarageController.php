<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;

class GarageController extends Controller
{
    public function offers()
    {
      if(Auth::id())
      {
        $name = Auth::user()->name;
        $service = booking::where('garagename','=',$name)->get();
        return view('service_provider.offers', compact('service'));
      }

      else {
        return redirect()->back();
      }
    }

    public function upload(Request $request)
    {

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

    public function offerrequest(Request $request)
    {
      $id = $request->name;
      $service = booking::where('id','=',$id)->get();
      return view('service_provider.offers', compact('service'));
    }

    public function accepted($id)
    {
      $data = booking::find($id);
      $data->status = 'Car Is Being Repaired';
      $data->save();
      $services = $data;
      $gname = $data->garagename;
      return redirect('/home')->with('gname', 'services');
    }

    public function declined($id)
    {
      $data = booking::find($id);
      $services = $data;
      $gname = $data->garagename;
      $data->delete();

      return redirect('/home')->with('gname', 'services');
    }

    public function done($id)
    {
      $data = booking::find($id);
      $data->status = 'Car Servicing Is Done';
      $data->save();
      $services = $data;
      $gname = $data->garagename;
      return redirect('/home')->with('gname', 'services');
    }
}
