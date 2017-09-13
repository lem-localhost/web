<?php

namespace App\Http\Controllers;
use App\Doctors;
use App\Rooms;
use Illuminate\Http\Request;
use App\Transformer\DoctorTransformer;
class DoctorsController extends Controller
{
    public function index(){
        $doctors = Doctors::paginate(15);

        return response()->json($doctors);
    }

    public function show($id){

        //$doctor = Doctors::find($id);
        $doctor = Doctors::with('rooms')->find($id);

         //return $this->response->withItem($doctor, new  DoctorTransformer());
         return (new DoctorTransformer)->transform($doctor);
        //return response()->json($doctor);
    }


    // public function DoctorRoom($id){
        
    //     $doctor = Doctors::find($id);
    //     return response()->json($doctor);
    // }
}
