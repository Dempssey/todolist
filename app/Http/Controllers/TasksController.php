<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Http\Requests\TasksRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= Tasks::where('task_id',Auth::id())->get();
        return view('index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TasksRequest $request, Tasks $task)
    {

        Tasks::create([

                'name'=>$request->name,
                'tool'=>$request->tool,
                'task_id'=>Auth::id(),
                'image'=>$request->image,

        ]);

        if( $request->hasFile('image') ) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(225, 100)->save(public_path('storage/' . $filename));
            $task->image = $filename;
            $task->save();
        };
        return view('index',compact('tasks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $task)
    {
        return view('display',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $task=Tasks::findOrFail($id);
        return view('edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tasks::create([

            'name'=>$request->name,
            'tool'=>$request->tool,
            'task_id'=>Auth::id()

    ]);
return ('data bho');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('delete','Story successfully deleted');
    }
}
