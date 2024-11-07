<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();

        return view('grade', [
            'title' => 'Grades',
            'grades' => $grades->load('students')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(yes $yes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(yes $yes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, yes $yes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(yes $yes)
    {
        //
    }
}
