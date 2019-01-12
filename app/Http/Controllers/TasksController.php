<?php

namespace App\Http\Controllers;
use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(){

      $tasks = Task::all();
      return View('tasks.index', compact('tasks'));

    }
    public function store(){

      Task::create(request(['title','category','description']));
      return redirect('/tasks');
    }
}
