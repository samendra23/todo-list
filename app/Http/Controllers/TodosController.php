<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('home', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_task');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');

        if($request->has('status')){
            $todo->status = true;
        }

        $todo->user_id = Auth::user()->id;

        $todo->save();

        return back()->with('success','Task Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::where('id', $id)->where('user_id', Auth::user()->id)->first();
        return view('edit_task', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $todo = Todo::where('id', $id)->where('user_id', Auth::user()->id)->firstOrFail();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');

        if($request->has('status')){
            $todo->status = true;
        }else{
            $todo->status = false;
        }

        $todo->save();

        return back()->with('success', 'Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
