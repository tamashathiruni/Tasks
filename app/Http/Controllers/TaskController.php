<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        //dd($request->all()); //view data

        $task = new Task;

        //validation
        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);
        
        $task->task=$request->task; //get data 
        $task->save(); //insert data

        $data=Task::all(); //get all data to $data variable for view

        //dd($data); //view data

        return view('tasks')->with('tasks',$data);

        //return redirect()->back(); //return to same page
        //return view(/task); (go to other page)
    }

}
