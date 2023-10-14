<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class tasksController extends Controller
{    
    /**
     * createTask
     *
     * @param  mixed $request
     * @return void
     */
    public function createTask(Request  $request){
        $inputs = $request->validate([
            'name'          => ['Required', 'min:3', 'max:50'],
            'descriptions'  => ['min:4', 'max:255'],
            'priority'      => ['Required', 'string'],
            'date'          => 'Required'
        ]);

        $add_task = Task::create($inputs);

        if ($add_task) {
            # code...
            return Redirect('/');
        }
    }

        
    /**
     * updateTask
     *
     * @return void
     */
    public function updateTask(Task $task){
        return view('/edit', ['task' => $task]);
    }


    public function update(Request $request, $id){

         $request->validate([
            'name' => 'required|string|max:255',
            'descriptions' => 'nullable|string',
            'priority' => 'required|string|max:255',
            'status'  => 'required',
            'date' => 'required|date',
            
        ]);

        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->descriptions = $request->input('descriptions');
        $task->priority = $request->input('priority');
        $task->status = $request->input('status');
        $task->date = $request->input('date');
        $task->save();

    return Redirect('/')->with('success', 'Task updated successfully!');
    }

    public function deleteTask(Task $task){
    $task->delete();
    return Redirect('/');
    }
}
