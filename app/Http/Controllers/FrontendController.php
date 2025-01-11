<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontendController extends Controller
{
      public function homePage()
      {


      $users=User::all();  
      $users=User::find(43);
      $users=User::where('user_id',43)->get();//json format
      $users=User::where('user_id',43)->first();//array format
      $users=User::where('user_id',43)->first();//array format

        return $users;
       // return view('welcome');
         
       
        // $name="Deepa"; $age=40; $record=['red'];  $record1=[];    $status=4;  $colors =["red","blue","green","yellow"];
        // return view('welcome',compact('name','age','record','record1','status','colors'));
      }

      public function aboutUs()
      {
       // return route('about');
        return view('about_us');
      }

      public function contactUs()
      {
        return view('contact_us');
      }
}
