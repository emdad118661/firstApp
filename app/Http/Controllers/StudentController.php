<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class StudentController extends Controller
{
    public function create(){
        return view('Student.create');
    }
    public function edit(){
        return view('Student.edit');
    }
    public function delete(){
        // return view('Student.edit');
    }
    public function get(Request $req){
        $student = array
        (
            "name" => $req->name,
            "id" => $req->id,
            "dob" => $req->dob
        );
        $student=(object) $student;
        return view('Student.get')->with('student',$student);
    }
    public function list(){
        $students=[];
    for($i=1;$i<=10;$i++){
        $student = array(
        "name" => "Student $i",
        "id" => $i,
        "dob"=> new DateTime()
        );
        $students[]=(object)$student;
        }
        return students[1]->dob;;
        return view('student.list')
        ->with('students',$students);
    }
}
