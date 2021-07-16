<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    function listOfPatients()
    {
        $patient = Patient::all();
        return view('layouts.patientsViews', ['patients' => $patient]);
    }

    function patientForm(Request $request)
    {
        $id = $request['id'];
        $patient = Patient::where('id', $id)->get()->first();
        return view('layouts.patientForm', ['patient' => $patient]);
    }

    function deletePatient(Request $request)
    {
        $id = $request['id'];
        Patient::where('id', $id)->delete();

        $patient = Patient::all();
        return view('layouts.patientsViews', ['patients' => $patient]);
    }

    function updatePatientDetails(Request $request)
    {
        $id = $request['id'];
        $name = $request['name'];
        $email = $request['email'];
        $card_number = $request['card'];
        $location = $request['location'];


            $patient = Patient::find($id);
            $patient->Name = $name;
            $patient->email = $email;
            $patient->location = $location;
            $patient->card_number = $card_number;
            $patient->save();

            $patient = Patient::all();
            return view('layouts.patientsViews', ['patients' => $patient]);

    }


    function goToAddPatient()
    {
        return view('layouts.addPatientForm');
    }

    function createPatient(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $card_number = $request['card'];
        $location = $request['location'];

        $validation = Validator::make($request->all(), [
            'card' => 'required',
            'email' => 'required',
            'name' => 'required',
            'location' => 'required',
        ]);

        if (!$validation->fails()) {
            $patient = new Patient();
            $patient->Name = $name;
            $patient->email = $email;
            $patient->location = $location;
            $patient->card_number = $card_number;
            $patient->save();

            $patient = Patient::all();
            return view('layouts.patientsViews', ['patients' => $patient]);
        }

        return view('layouts.addPatientForm');
    }
}
