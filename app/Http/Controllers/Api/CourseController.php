<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validated =$request->validate([
            'name'=>'required|string',
            'explanation'=>'required|string',
            'adress'=>'required|url',
            'amountofpeople'=>'required|integer|min:0',
        ]);
        $course=Course::create([$validated]);
        return response()->json($course);
    }
    public function index()
    {
        $courses = Course::all();
        return response()->json(['data'=>$courses],200);
    }

}
