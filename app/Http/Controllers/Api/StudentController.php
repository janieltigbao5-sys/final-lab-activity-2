<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

<<<<<<< HEAD

=======
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Student::latest()->get()
        );
<<<<<<< HEAD
=======

>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
<<<<<<< HEAD
            'student_number' => 'required|string|max:50|unique:students,student_number',
            'first_name'     => 'required|string|max:255',
            'last_name'      => 'required|string|max:255',
            'email'          => 'required|email|unique:students,email',
            'course'         => 'required|string|max:255',
            'year_level'     => 'required|integer|between:1,6',
        ]);

        $student = Student::create($validated);

        return response()->json($student, 201);
=======
            'name'       => 'required|string|max:255',
            'course'     => 'required|string|max:255',
            'year_level' => 'required|integer|min:1|max:4',
        ]);

    $student = Student::create($validated);

    return response()->json($student, 201);

>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
<<<<<<< HEAD
            'student_number' => 'required|string|max:50|unique:students,student_number,' . $student->id,
            'first_name'     => 'required|string|max:255',
            'last_name'      => 'required|string|max:255',
            'email'          => 'required|email|unique:students,email,' . $student->id,
            'course'         => 'required|string|max:255',
            'year_level'     => 'required|integer|between:1,6',
=======
            'name'       => 'sometimes|required|string|max:255',
            'course'     => 'sometimes|required|string|max:255',
            'year_level' => 'sometimes|required|integer|min:1|max:6',
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
        ]);

        $student->update($validated);

        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully.',
        ]);
<<<<<<< HEAD
    }
=======
    }   
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
}
