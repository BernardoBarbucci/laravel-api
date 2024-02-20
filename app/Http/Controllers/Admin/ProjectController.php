<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Technology;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin/projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technologies = Technology::all();
        $project = new Project();
        // view per creare un new project
        return view('admin.projects.create', compact('technologies', 'project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'length' => 'required',
            'duration' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'required',
        ]);

        // save the new project
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->length = $request->input('length');
        $project->duration = $request->input('duration');
        $project->color = $request->input('color');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $project->image = $imagePath;
        }

        $project->save();

        // Project::create($request->all());

        return Redirect::route('admin.projects.index')->with('success', 'Progetto creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'length' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'technologies' => 'array',
        ]);

        // Aggiorna i dati del progetto
        $project->update($validatedData);

        // Aggiorna le relazioni many-to-many con technologies
        if ($request->has('technologies')) {
            $project->technologies()->sync($request->input('technologies'));
        } else {
            $project->technologies()->detach();
        }

        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.data.index')->with('success', 'Project deleted successfully!');
    }
}
