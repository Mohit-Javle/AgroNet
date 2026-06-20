<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        Inquiry::create([
            'name'             => $request->name,
            'email'            => $request->email,
            'phone'            => $request->phone,
            'company'          => $request->company,
            'product_interest' => $request->product_interest,
            'message'          => $request->message,
        ]);

        return back()->with('success', 'Thank you for your inquiry. Our team will contact you within 24 hours.');
    }
}
