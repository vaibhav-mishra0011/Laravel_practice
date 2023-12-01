<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Log;


class TaskController extends Controller
{
    public function index()
    {
        Log::debug("Going to load tasks");

        // GET TASK from DB
        $tasks = Task::orderBy("created_at", "desc")->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }
    public function create()
    {
        return view('tasks.create');
    }

    public function destroy(Request $request, $id)
    {
        // delete the task with id
        Task::destroy($id);

        return redirect()->route('tasks.index');
    }
    


    public function store(Request $request)
    {

        try {
            Log::debug('Got request to save task with ==> ');
            Log::debug($request->all());
           
            $this->validate($request, [
                'name' => 'required'
            ]);
    
            Task::create([
                'name' => $request->name
            ]);
    
            Log::debug("Task crated successfully");
    
            return redirect()->route('tasks.index');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back();
        }
      
    }
}

