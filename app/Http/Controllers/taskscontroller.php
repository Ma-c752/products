<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class taskscontroller extends Controller
{
    public function index()
    {

        // $data = DB::table('tasks')->get();        //commands Quary bulider
        $data = task::all();
        return view('allproducts', compact('data'));
    }
    public function insert(Request $O)
    {

        //   DB::table('tasks')->insert(['name' => $O->name, 'created_at' => now(), 'updated_at' => now()]);    //commands Quary bulider
        $task = new task();
        $task->name =  $O->product_name;
        $task->price =  $O->product_price;
        $task->quantity =  $O->product_qty;
        $task->save();
        return redirect()->back();
    }
    public function delete($id)
    {

        // DB::table('tasks')->where("id", "=", $id)->delete();
        $flight = task::find($id);
        $flight->delete();
        return redirect()->back();
    }
}
