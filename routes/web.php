<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// workshop-1

// Route::get('/students', function () {
//     $students = Student::all();

//     return view('student.list', [
//         'students' => $students
//     ]);
// });

// Route::get('/students/create', function () {
//     return view('student.create');
// });

// Route::post('/students', function (Request $request) {

//     $validated = $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|max:255|unique:students,email',
//         'phone' => 'required|string|max:20',
//         'address' => 'nullable|string|max:500',
//         'date_of_birth' => 'nullable|date',
//     ]);

//     Student::create($validated);

//     return redirect('/students')->with('success', 'Student created successfully!');
// });

// Route::get('/students/{id}', function ($id) {
//     $student = Student::findOrFail($id);

//     return view('student.detail', [
//         'student' => $student
//     ]);
// });

// Route::get('/students/{id}/edit', function ($id) {
//     $student = Student::findOrFail($id);

//     return view('student.edit', [
//         'student' => $student
//     ]);
// });

// Route::put('/students/{id}', function (Request $request, $id) {

//     $student = Student::findOrFail($id);

//     $validated = $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|max:255|unique:students,email,' . $student->id,
//         'phone' => 'required|string|max:20',
//         'address' => 'nullable|string|max:500',
//         'date_of_birth' => 'nullable|date',
//     ]);

//     $student->update($validated);

//     return redirect('/students')->with('success', 'Student updated successfully!');
// });

// Route::delete('/students/{id}', function ($id) {

//     $student = Student::findOrFail($id);

//     $student->delete();

//     return redirect('/students')->with('success', 'Student deleted successfully!');
// });

// Route::get('/courses', function () {
//     $courses = Course::all();

//     return view('course.list', [
//         'courses' => $courses
//     ]);
// });

// Route::get('/courses/create', function () {
//     return view('course.create');
// });

// Route::post('/courses', function (Request $request) {

//     $validated = $request->validate([
//         'name' => 'required|string|max:255',
//         'description' => 'nullable|string',
//         'duration' => 'required|integer|min:1',
//         'fee' => 'required|numeric|min:0',
//         'difficulty' => 'required|in:Easy,Medium,Hard',
//     ]);

//     $validated['is_active'] = $request->has('is_active');

//     Course::create($validated);

//     return redirect('/courses')->with('success', 'Course created successfully!');
// });

// Route::get('/courses/{id}', function ($id) {
//     $course = Course::findOrFail($id);

//     return view('course.detail', [
//         'course' => $course
//     ]);
// });

// Route::get('/courses/{id}/edit', function ($id) {
//     $course = Course::findOrFail($id);

//     return view('course.edit', [
//         'course' => $course
//     ]);
// });

// Route::put('/courses/{id}', function (Request $request, $id) {

//     $course = Course::findOrFail($id);

//     $validated = $request->validate([
//         'name' => 'required|string|max:255',
//         'description' => 'nullable|string',
//         'duration' => 'required|integer|min:1',
//         'fee' => 'required|numeric|min:0',
//         'difficulty' => 'required|in:Easy,Medium,Hard',
//     ]);

//     $validated['is_active'] = $request->has('is_active');

//     $course->update($validated);

//     return redirect('/courses')->with('success', 'Course updated successfully!');
// });

// Route::delete('/courses/{id}', function ($id) {

//     $course = Course::findOrFail($id);

//     $course->delete();

//     return redirect('/courses')->with('success', 'Course deleted successfully!');
// });


// workshop-1 till here 
//workshop-2

Route::resource('students', StudentController::class);

Route::resource('courses', CourseController::class);