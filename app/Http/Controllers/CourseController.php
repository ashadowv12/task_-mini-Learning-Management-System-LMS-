<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource (all courses).
     */
    public function index()
    {
        $courses = Course::all(); // Get all courses
        return view('student.courses.index', compact('courses'));
    }

    /**
     * Display the specified course.
     */
    public function show(string $id)
    {
        $course = Course::findOrFail($id); // Get course by ID
        return view('student.courses.show', compact('course'));
    }

    /**
     * Enroll the authenticated student in a course.
     */
    public function enroll(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        // Assuming you have a pivot table 'course_user' for enrollments
        // and a User model with a courses() relationship
        $user = auth()->user();

        if (!$user->courses->contains($course->id)) {
            $user->courses()->attach($course->id);
        }

        return redirect()->route('courses.index')->with('success', 'Enrolled successfully!');
    }
}
