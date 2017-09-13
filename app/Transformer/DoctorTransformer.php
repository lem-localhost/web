<?php
 
namespace App\Transformer;
use App\Doctors;

class DoctorTransformer{
 
    public function transform($doctor) {
        return [
            'id' => $doctor->id,
            'doctor_name' => $doctor->name,
            'doctor_room' => $doctor->room_id,
            'rooms' => [
                'id' => $doctor->rooms->id,
                'name' => $doctor->rooms->name
            ]
        ];
    }
 
}


