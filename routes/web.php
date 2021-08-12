<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});
/**
 * Show Task
 */
Route::get('/', function (){
    $tasks = Task::orderBy('created_at', 'desc')->get();
   return view('tasks', [
       'task' => $tasks
   ]);
});
/**
 * Add New Task
 */
Route::post('/task', function (Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255'
    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $task = new Task;
    // $task->name = "test";
    $task->name = $request->name;
    $task->save();
    return redirect('/');
});
/**
 * Delete Task
 */
Route::delete('/task/{task}', function ($id){
    Task::findOrFail($id)->delete();
    return redirect('/');
});