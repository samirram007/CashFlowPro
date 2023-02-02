<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        $data['collections'] = Company::all();
        return view('company.index', $data);
    }

    public function create()
    {
        $Getview = view('company.create')->render();

        return response()->json([
            'status' => true,
            'html' => $Getview,

        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'address' => ['required', 'max:255'],
            'alt_contact_no' => ['required'],
            'fiscal_year_start' => ['required'],
            'fiscal_year_end' => ['required'],
            'book_start_from' => ['required'],
            'book_end' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => '400',
                'message' => 'Fill the empty Fields',
            ]);
        } else {
            $company = new Company();
            $company->name = $request->get('name');
            $company->address = $request->get('address');
            $company->email = $request->get('email');
            $company->contact_no = $request->get('contact_no');
            $company->alt_contact_no = $request->get('alt_contact_no');
            $company->country = $request->get('country');
            $company->state = $request->get('state');
            $company->city = $request->get('city');
            $company->pincode = $request->get('pincode');
            $company->currency_symbol = $request->get('currency_symbol');
            $company->currency_code = $request->get('currency_code');
            $company->gst_no = $request->get('gst_no');
            $company->fiscal_year_start = $request->get('fiscal_year_start');
            $company->fiscal_year_end = $request->get('fiscal_year_end');
            $company->book_start_from = $request->get('book_start_from');
            $company->book_end = $request->get('book_end');
            $company->save();
            $data['collections'] = Company::all();
            $html = view('company.partials.index_body', $data)->render();

            return response()->json([
                'status' => '200',
                'message' => 'Company Added Successfully',
                'html' => $html,
            ]);

        }
    }
    public function edit($id)
    {
        $data['editData'] = Company::find($id);
        $Getview = view('company.edit', $data)->render();

        return response()->json([
            'status' => true,
            'html' => $Getview,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->contact_no = $request->contact_no;
        $company->alt_contact_no = $request->alt_contact_no;
        $company->country = $request->country;
        $company->state = $request->state;
        $company->city = $request->city;
        $company->pincode = $request->pincode;
        $company->currency_symbol = $request->currency_symbol;
        $company->currency_code = $request->currency_code;
        $company->gst_no = $request->gst_no;
        $company->fiscal_year_start = $request->fiscal_year_start;
        $company->fiscal_year_end = $request->fiscal_year_end;
        $company->book_start_from = $request->book_start_from;
        $company->book_end = $request->book_end;
        // dd($request->all());
        $company->save();
        $data['collections'] = Company::all();
        $html = view('company.partials.index_body', $data)->render();
        return response()->json([
            'status' => '200',
            'message' => "Information Updated Successfully",
            'html' => $html,
        ]);
    }
    public function view()
    {
        $Getview = view('company.view')->render();

        return response()->json([
            'status' => true,
            'html' => $Getview,
        ]);
    }

}
