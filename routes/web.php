<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/', [\App\Http\Controllers\PatientController::class, 'listOfPatients']);
Route::get('/patientForm/{id}', [\App\Http\Controllers\PatientController::class, 'patientForm']);
Route::get('/updatePatientDetails/{id}', [\App\Http\Controllers\PatientController::class, 'updatePatientDetails']);
Route::get('/deletePatient/{id}', [\App\Http\Controllers\PatientController::class, 'deletePatient']);
Route::get('/goToAddPatient', [\App\Http\Controllers\PatientController::class, 'goToAddPatient']);
Route::get('/createPatient', [\App\Http\Controllers\PatientController::class, 'createPatient']);
});
