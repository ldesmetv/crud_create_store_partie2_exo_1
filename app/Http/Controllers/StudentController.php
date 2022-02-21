<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        $students = student::all();
        $AllMen = student::where('gender','=','Homme')->get();
        $AllWomen = student::where('gender','=','Femme')->get();
        return view('welcome', compact('students', 'AllMen', 'AllWomen'));
    }

    public function create(){
        return view("createStudent");
    }

    public function store(Request $request){
        $store = new student();
        $store->name = $request->name;
        $store->gender = $request->gender;
        $store->email = $request->email;
        $store->age = $request->age;
        $store->save();
        return redirect("/");
    }
}
