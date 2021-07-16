@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <form action="{{ url("createPatient") }}">
                            <label for="fname">Patient Name:</label><br>
                            <input type="text" id="name" name="name" ><br>

                            <label for="email">Email :</label><br>
                            <input type="text" id="email" name="email"><br>

                            <label for="location">Location:</label><br>
                            <input type="text" id="location" name="location"><br>

                            <label for="card">Card Number :</label><br>
                            <input type="text" id="card" name="card"><br>
                            <input type="submit" value="submit">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
