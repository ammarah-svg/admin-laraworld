<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming the User model exists

class UserController extends Controller
{
    public function addUser(Request $req)
    {
        // Validate input data
        $formfields = $req->validate([
            'username' => ['required','min:3', 'max:30'],
            'email' => ['required'],
            'phone' => ['required'],
            'password' => ['required'],
            'role' => ['required']
        ]);

        // Create a new user
        $user = User::create($formfields);

        // Flash success message to session
        $req->session()->flash('success', 'User added successfully');

        // Redirect back to the frontend or any desired route
        return redirect()->back();
    }
}
