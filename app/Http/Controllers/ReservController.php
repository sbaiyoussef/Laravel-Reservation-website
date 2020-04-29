<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservController extends Controller
{
    public function reservationcreate( Request $request){
        $this->validate($request,[
        'reqcheckin'=>'required',
        'reqcheckout'=>'required',
        'reqroom'=>'required',
        'room'=>'required',
        'child'=>'required',
        'adult'=>'required',
        'price'=>'required',
        'firstname'=>'required',
        'secondname'=>'required',
        'Email'=>'required',
        'confirmemail'=>'required|same:Email',
        'country'=>'required',
        
        ]);

         $reservation=new Reservation();
         $reservation->checkin=$request['reqcheckin'];
         $reservation->checkout=$request['reqcheckout'];
         $reservation->room=$request['reqroom'];
         $reservation->nbroom=$request['room'];
         $reservation->child=$request['child'];
         $reservation->adult=$request['adult'];
         $reservation->prix=$request['price'];
         $reservation->firstname=$request['firstname'];
         $reservation->lastname=$request['secondname'];
         $reservation->email=$request['Email'];
         $reservation->confemail=$request['confirmemail'];
         $reservation->country=$request['country'];
         $reservation->air=$request['air'];
         $reservation->car=$request['car'];
         $reservation->cardname=$request['cardname'];
         $reservation->cardnumber=$request['cardnumber'];
         $reservation->cvv=$request['cvv'];
         $reservation->mm=$request['mm'];
         $reservation->yyyy=$request['yyyy'];
         $reservation->save();
        $message='Your Reservation Has Been Confirmed, We look forward to welcoming you and ensuring a most enjoyable visit';
       
       return redirect()->route('blog')->with(['message'=>$message]);


    }
}
