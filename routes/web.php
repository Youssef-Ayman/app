<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\CompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/companies/all', 'App\http\Controllers\CompanyController@getAllCompanies');
Route::get('/companies/{companyId}/employees', 'App\http\Controllers\CompanyController@getEmployeesByCompanyId');
Route::post('/companies/{companyId}/addEmployee', 'App\http\Controllers\CompanyController@addEmployee');
