<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teams = Team::query();

        // Showing paginated data 2 for each page/table
        $teams = $teams->paginate(4);

        return view('teams.index',compact('teams'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'position' => 'required|string|max:50',
            'image' => 'required|string|max:30',
            'bio' => 'required|string|max:200'
        ]);
    
        Team::create($request->all());
    
        return redirect()->route('teams.index')
            ->with('success','Added successfully.');
    }

    /**
     * Display the specified resource.
     */
        public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        return view('teams.edit',compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'position' => 'required|string|max:50',
            'image' => 'required|string|max:30',
            'bio' => 'required|string|max:200'
        ]);

        $team->update($request->all());
    
        return redirect()->route('teams.index')
            ->with('success','Updated successfully.');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')
            ->with('success','Deleted successfully');

    }
}
