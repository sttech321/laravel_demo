<?php
namespace App\Http\Controllers;

use App\Models\MembersList;
use Illuminate\Http\Request;

class MembersListController extends Controller
{
    public function index()
    {
        // Fetch all users from the MembersList model
        $users = MembersList::latest()->simplePaginate(5);

        // Pass users data to the view
        return view('dashboard', ['users' => $users]);
    }

    public function show(MembersList $member)
    {
        return view('member-show', compact('member'));
    }

    public function update(Request $request, MembersList $member)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Update the member record
        $member->update($request->all());

        // Redirect back with success message
        return redirect()->route('member-show', $member)->with('success', 'Member details updated successfully');
    }

    public function destroy(MembersList $member)
    {
        // Delete the member
        $member->delete();

        // Redirect back with success message
        return redirect()->route('dashboard')->with('success', 'Member deleted successfully');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            // Add any other validation rules as needed
        ]);

        // Create a new member using the validated data
        $member = MembersList::create($validatedData);

        // Optionally, you can redirect the user to the user list page
        return redirect()->route('dashboard')->with('success', 'Member created successfully!');
    }

    public function create()
    {
        return view('member-create');
    }
}
