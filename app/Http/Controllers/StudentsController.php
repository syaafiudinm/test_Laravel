<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

   public function create(){
      return view('create');
   }

   public function store(Request $request){
      
      $request->validate([
         'nama' => 'required',
         'score' => 'required'
      ]);

      Student::create([
         'nama' => $request->nama,
         'score' => $request->score,
         'teacher_id' => 1
      ]);

      return redirect::route('index');

   }

}
