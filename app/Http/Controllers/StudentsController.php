<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;

class StudentsController extends Controller
{

   public function index(){
      // $students = Student::all();
      $students = Student::paginate(2);
      return view('index', ['students' => $students]);
   }

   public function filter(){
      $students = Student::where('score', '>=', 90)->get();
      return view('filter', ['students' => $students]);
   }
 
   public function show($id){
      $student = Student::find($id);
      return view('show', ['student' => $student ]);
   }

}
