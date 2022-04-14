<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;

class HomeController extends Controller
{
    public function redirect()
    {
      if(Auth::id())
      {
        if(Auth::user()->usertype=='0')
        {
          $id = Auth::user()->id;
          $services = booking::where('consumerid','=',$id)->get();
          return view('consumer.home', compact('services'));
        }
        else
        {
          $gname = Auth::user()->name;
          $services = booking::where('garagename','=',$gname)->get();
          return view('service_provider.home', compact('gname', 'services'));
        }
      }
      else
      {
        return redirect()->back();
      }
    }

    public function index()
    {
      return view('index');
    }

    public function login()
    {
    return view('login');
    }

    public function register()
    {
    return view('register');
    }

}
