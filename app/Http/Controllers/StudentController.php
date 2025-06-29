<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:students,nim|max:20',
            'nama' => 'required|max:100',
            'email' => 'required|email|unique:students,email|max:100',
            'jurusan' => 'required|max:50',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:15'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        
        $request->validate([
            'nim' => 'required|max:20|unique:students,nim,' . $id,
            'nama' => 'required|max:100',
            'email' => 'required|email|max:100|unique:students,email,' . $id,
            'jurusan' => 'required|max:50',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:15'
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
