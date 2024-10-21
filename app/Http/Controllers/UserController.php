<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\UserModel; // Ensure the correct model is imported
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method for displaying the form
    public function create(){ 
        return view('create_user', [
            'kelas' => Kelas::all(), // Fetch all 'kelas' entries
        ]); 
    } 

    // Method for storing the form data
    public function store(Request $request) // Use $request instead of $req for consistency
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id', // Validate that 'kelas_id' exists in the 'kelas' table
        ]);

        // Create the user with the validated data
        $user = UserModel::create($validatedData);

        // Load the related 'kelas' data
        $user->load('kelas');

        // Return a view with the user's data, including the related 'kelas' name
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan', // Fallback if 'kelas' is null
        ]);
    }
}
