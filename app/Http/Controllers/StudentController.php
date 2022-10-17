<?php

namespace App\Http\Controllers;

use App\Models\ModelStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all();
        return view('student_manage', ['students' => $students]);
    }

    public function get_student_by_id($id)
    {
        $data = DB::select('SELECT * from students where id = :id', ['id' => $id]);
        return view('student_edit', ['data' => $data]);
    }

    public function create()
    {
        return view('student_create');
    }

    public function store(Request $request)
    {
        Student::create([
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);

        return redirect('student_manage');
    }

    public function update(Request $request, $id)
    {
        $data = Student::find($id);
        $data->update([
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address,
        ]);


        return redirect('student_manage/');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('student_manage');
    }
}
