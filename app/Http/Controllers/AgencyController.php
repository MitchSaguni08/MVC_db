<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function store(Request $request)
    {
        $agency = new agency();
        $agency->name = $request->input('name');
        $agency->email = $request->input('email');
        $agency->subject = $request->input('subject');
        $agency->message = $request->input('message');
        $agency->save();
        
        return redirect()->back()->with('success', 'Your Request in our agency is Submitted successfully!');
    }
}

