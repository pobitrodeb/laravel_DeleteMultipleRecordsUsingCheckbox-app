<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class HomeController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function distroy(Request $request)
    {
     //  dd ($request->ids);
        $ids = $request->ids;
        Student::whereIn('id', $ids)->delete();
        return redirect()->back();
    }
}
