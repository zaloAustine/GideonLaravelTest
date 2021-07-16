@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table border="1">
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Card number</th>
                            <th>location</th>
                        </tr>

                        @foreach($patients as $p)
                            <tr>
                                <td>{{$p["Name"]}}</td>
                                <td>{{$p["email"]}}</td>
                                <td>{{$p["card_number"]}}</td>
                                <td>{{$p["location"]}}</td>
                                <td><a href="/patientForm/{{$p["id"]}}">Edit Details</a></td>
                                <td><a href="/deletePatient/{{$p["id"]}}">Delete patient</a></td>
                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
