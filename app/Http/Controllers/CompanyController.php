<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class CompanyController extends Controller
{
    public function getAllCompanies()
    {
        return Company::all();
    }
    public function getEmployeesByCompanyId($companyId)
    {
        return Employee::where('company_id', $companyId)->get();
    }

    public function addEmployee($companyId, Request $req)
    {
        $employee = new Employee;
        $employee->forename = $req->forename;
        $employee->surname = $req->surname;
        $employee->email = $req->email;
        $employee->company_id = $companyId;
        $employee->save();
    }
}
