<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ValentineController extends Controller
{
    public function index()
    {
        $names = Session::get('names', []);
        return view('admin', compact('names'));
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $names = Session::get('names', []);
        $names[] = $name;
        Session::put('names', $names);

        return redirect()->route('admin');
    }

    public function show($name)
    {
        return view('valentine', compact('name'));
    }
}
